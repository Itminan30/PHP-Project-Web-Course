<?php
ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params(
    [
        "lifetime" => 60 * 60,
        "domain" => "localhost",
        "path" => "/",
        "secure" => true,
        "httponly" => true
    ]
);

function regenerate_session_id()
{
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}
function regenerate_session_id_logged($user_id)
{
    session_regenerate_id(true);
    $newSession = session_create_id();
    $sessionID = $newSession . "_" . $user_id;
    session_id($sessionID);
    $_SESSION["last_regeneration"] = time();
}

session_start();

if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id_logged($_SESSION["user_id"]);
    } else {
        $interval = 60 * 60;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id_logged($_SESSION["user_id"]);
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_session_id();
    } else {
        $interval = 60 * 60;
        if (time() - $_SESSION["last_regeneration"] >= $interval) {
            regenerate_session_id();
        }
    }
}
