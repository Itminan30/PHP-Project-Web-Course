<?php
require_once __DIR__ . "/includes/config_session.inc.php";
require_once __DIR__ . "/includes/register_mvc/register_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/register.css">
</head>

<body>
    <main>
        <form action="./includes/register.inc.php" method="post" enctype="multipart/form-data">
            <!-- User name -->
            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" placeholder="Your Username" id="username" required>
            </div>
            <!-- email -->
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email" placeholder="Your Email" required>
            </div>
            <!-- password -->
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Your Password" required>
            </div>
            <!-- phone -->
            <div>
                <label for="phone">Phone: </label>
                <input type="tel" name="phone" id="phone" placeholder="Your Phone Number" required>
            </div>
            <!-- address -->
            <div>
                <label for="address">Address: </label>
                <input type="text" name="address" id="address" placeholder="Your Address" required>
            </div>
            <!-- dob -->
            <div>
                <label for="dob">Birthday: </label>
                <input type="date" name="dob" id="dob" required>
            </div>
            <!-- photo url -->
            <div>
                <label for="photo">Photo: </label>
                <input type="file" name="photo" id="photo" accept="image/*" placeholder="Photo">
            </div>

            <div>
                <button type="submit">Create Account</button>
            </div>
        </form>
        <div>
            <?php
                check_register_errors();
            ?>
        </div>
    </main>
</body>

</html>