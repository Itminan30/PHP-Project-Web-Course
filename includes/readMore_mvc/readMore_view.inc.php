<?php
function check_readMore_errors()
{
    if (isset($_SESSION["readMore_error"])) {
        $errors = $_SESSION["readMore_error"];

        echo "<br>";
        foreach ($errors as $error) {
            echo "<p>$error.</p>";
        }

        unset($_SESSION["readMore_error"]);
    } else if (isset($_GET["purchase"]) && $_GET["purchase"] === "Success") {
        echo "<br>";
        echo "<p>Package Purchased Successfully!!!</p>";
    }
}