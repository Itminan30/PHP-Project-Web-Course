<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="./css/reset.css"> -->
    <link rel="stylesheet" href="./css/home.css">
</head>

<body>
    <a href="./register.php">Register</a>
    <a href="./login.php">Login</a>

    <div>
        <div class="img-user">
            <?php if (isset($_SESSION["user_photo"])) : ?>
                <img src="<?php echo $_SESSION["user_photo"] ?>" alt="photo">
            <?php endif ?>
        </div>
        <p>
            <?php if (isset($_SESSION["user_role"])) : ?>
                <?php echo $_SESSION["user_role"] ?>
            <?php endif ?>
        </p>
        <p>
            <?php if (isset($_SESSION["user_username"])) : ?>
                <?php echo $_SESSION["user_username"] ?>
            <?php endif ?>
        </p>
        <p>
            <?php if (isset($_SESSION["user_email"])) : ?>
                <?php echo $_SESSION["user_email"] ?>
            <?php endif ?>
        </p>
    </div>
    <div>
        <form action="./includes/logout.inc.php">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>

</html>