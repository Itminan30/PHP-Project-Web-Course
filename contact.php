<?php
require __DIR__ . "/includes/common/header.php";
?>

<?php
require __DIR__ . "/includes/common/navbar.php";
?>


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









<!--Footer Part-->
<?php
require __DIR__ . "/includes/common/footer.php";
?>