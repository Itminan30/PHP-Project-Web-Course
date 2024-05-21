<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Contact";
require "common/head.php";
?>
<!--  -->

<!-- Header Section Start -->
<?php
require "common/header.php";
?>
<!-- Header Section End -->

<!-- Nav Section Start -->
<nav>
  <div class="header-nav">
    <div class="navbar bg-base-100">
      <div class="flex-1">
        <a class="metal-mania-regular" href=" ">Gulliver's Travels</a>
      </div>
    </div>
    <div class="header-nav-buttons">
      <a class="roboto-medium" href="./index.php">Home</a>
      <a class="roboto-medium" href="./tourPackage.php">Packages</a>
      <a class="roboto-medium" href="./blogPage.php">Blog</a>
      <a class="roboto-medium" href=" ">About</a>
      <a class="roboto-medium" style="color: rgb(207, 24, 24);" href="./contact.php">Contact</a>
      <?php if (isset($_SESSION["user_email"])) : ?>
        <!-- Profile Picture -->
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img alt="<?php echo $_SESSION["user_username"] ?>" src="<?php if (isset($_SESSION["user_photo"])) echo $_SESSION["user_photo"] ?>" />
            </div>
          </div>
          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
            <li>
              <a>
                <?php if (isset($_SESSION["user_email"])) echo $_SESSION["user_email"] ?>
              </a>
            </li>
            <li>
              <a class="justify-between">
                Profile
              </a>
            </li>
            <li>
              <a href="./includes/logout.inc.php">Logout</a>
            </li>
          </ul>
        </div>
      <?php else : ?>
        <a class="roboto-medium" href="./register.php">Register</a>
        <a class="roboto-medium" href="./login.php">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<!-- Nav Section End -->

<!-- Main Start -->
<main>
  <div>
    <img style="width: 1600px; height: 430px;margin: 10px auto;" class="object-cover" src="images/contact page pic.jpg" alt="">
    <div class="pera">
      <h2 class="russo-one-regular">Contact</h2>
      <p>Send your questions, comments & suggestions!</p>
    </div>
  </div>

  <div>
    <h2 style="text-align: center;  color: rgb(208, 54, 54); font-weight: bolder;font-size: x-large;">GET IN TOUCH</h2> <br>
    <h2 style="text-align: center; font-size: larger;">Send me your questions, comments, or suggestions! <br>

      If you'd like to work with me or you have a question or comment, you can contact me using the form below.<br><br>

      Sometimes I'm busy traveling, but I try to respond to any messages!</h2> <br><br><br>
  </div>

  <!--form-->
  <div class="contach-form">
    <form class="form" action="">
      Name :
      <input type="text" placeholder="Your name" required>
      Email address :
      <input type="email" placeholder="Your Email" required>
      <textarea name="comments" rows="4" placeholder="Comment"></textarea><br>
      <input class="contact-submit" type="submit" value="Submit">
    </form>
  </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->