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
<?php require "common/navbar.php" ?>
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
      <label for="name">Name :</label>
      <input type="text" placeholder="Your name" required>
      <label for="email">Email address :</label>
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