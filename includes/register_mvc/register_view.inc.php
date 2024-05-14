<?php
    function check_register_errors() {
        if(isset($_SESSION["register_error"])){
            $errors = $_SESSION["register_error"];

            echo "<br>";
            foreach($errors as $error) {
                echo "<p>$error.</p>";
            }

            unset($_SESSION["register_error"]);
        }
        else if(isset($_GET["register"]) && $_GET["register"] === "success") {
            echo "<br>";
            echo "<p>Signup Success!!!</p>";
        }
    }