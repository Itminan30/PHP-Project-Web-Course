<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/login_mvc/login_view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <main>
        <form action="./includes/login.inc.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
        <div>
            <?php
            show_login_errors()
            ?>
        </div>
    </main>
</body>

</html>