<?php
function check_write_errors() {
        if(isset($_SESSION["write_error"])){
            $errors = $_SESSION["write_error"];

            echo "<br>";
            foreach($errors as $error) {
                echo "<p>$error.</p>";
            }

            unset($_SESSION["write_error"]);
        }
        else if(isset($_GET["blog"]) && $_GET["blog"] === "success") {
            echo "<br>";
            echo "<p>Signup Success!!!</p>";
        }
    }