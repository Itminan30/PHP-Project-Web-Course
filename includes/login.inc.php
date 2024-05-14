<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {
        require_once __DIR__ . "/database/dbh.inc.php";
        require_once __DIR__ . "/login_mvc/login_model.inc.php";
        require_once __DIR__ . "/login_mvc/login_contr.inc.php";

        // Error Handlings
        $errors = [];

        if(is_input_empty($email, $password)) {
            $errors["empty_input"] = "Fillup all the fields!!!";
        }
        if(id_email_invalid($email)){
            $errors["invalid_email"] = "Enter a valid Email!!!";
        }

        $result = get_user($pdo, $email);

        if(is_email_wrong($result)){
            $errors["wrong_email"] = "No account exists with this email!!!";
        }
        if(!is_email_wrong($result) && is_password_wrong($password, $result["USER_PASSWORD"])){
            $errors["incorrect_password"] = "Wrong Password Bitch!!!";
        }

        require_once __DIR__ . "/config_session.inc.php";
        if($errors) {
            $_SESSION["error_login"] = $errors;

            header("Location: ../login.php");
            die();
        }

        // Create a new session id and add user id with it.
        $newSession = session_create_id();
        $sessionID = $newSession . "_" . $result["ID"];
        session_id($sessionID);

        // Save user data in session
        $_SESSION["user_id"] = $result["ID"];
        $_SESSION["user_username"] = $result["USER_NAME"];
        $_SESSION["user_email"] = $result["EMAIL"];
        $_SESSION["user_role"] = $result["ROLE"];
        $_SESSION["user_photo"] = $result["PHOTO_URL"];
        $_SESSION["user_photoId"] = $result["PHOTO_ID"];

        // Update session regeneration time
        $_SESSION["last_regeneration"] = time();

        // Sending user to index after login
        header("Location: ../index.php?login=success");
        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../login.php");
    die();
}
