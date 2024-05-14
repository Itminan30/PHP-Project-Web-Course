<?php
function show_login_errors()
{
    if(isset($_SESSION["error_login"])){
        $errors = $_SESSION["error_login"];

        echo "<br>";
        foreach($errors as $error) {
            echo "$error";
            echo "<br>";
        }

        unset($_SESSION["error_login"]);
    }
    else if(isset($_GET["login"]) && $_GET["login"] === "success"){
        
    }
}
