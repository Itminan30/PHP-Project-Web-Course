<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Home";
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
      <a class="roboto-medium" style="color: rgb(207, 24, 24);" href="./index.php">Home</a>
      <a class="roboto-medium" href="./tourPackage.php">Packages</a>
      <a class="roboto-medium" href="./blogPage.php">Blog</a>
      <a class="roboto-medium" href=" ">About</a>
      <a class="roboto-medium" href="./contact.php">Contact</a>
      <a class="roboto-medium" href="./register.php">Register</a>
      <a class="roboto-medium" href="./login.php">Login</a>
    </div>
  </div>
</nav>
<!-- Nav Section End -->

<!--Main Start-->
<main>
  <!-- Carousal Start -->
  <div class="carousel">
    <!--Slide 1-->
    <div id="slide1" class="carousel-item relative w-full">
      <img src="images/buriganga1.jpeg" class="w-full object-cover" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
    <!--slide 2-->
    <div id="slide2" class="carousel-item relative w-full">
      <img src="images/carousal-pic2.jpeg" class="w-full object-cover" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <!-- slide 3-->
    <div id="slide3" class="carousel-item relative w-full">
      <img src="images/carousal-pc-3.jpeg" class="w-full object-cover" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <!-- slide 4-->
    <div id="slide4" class="carousel-item relative w-full">
      <img src="images/carousal-pic4.jpg" class="w-full object-cover" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
  <!-- Carousal End -->

  <!-- Inside Slider Start -->
  <div class="pera">
    <h2 class="russo-one-regular">Get Ready to Explore <span style="color: rgb(230, 37, 37);"> Dhaka </span><br> with <br>
      GULLIVER’S TRAVELS</h2> <br>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit perferendis exercitationem, nulla alias suscipit eveniet porro quaerat amet molestiae repudiandae sunt minima nemo voluptate distinctio architecto corporis ipsa quibusdam quasi.
    </p>
    <br><br>
    <!--search-->
    <input type="text" placeholder="Type here" class="input input-bordered input-error w-full max-w-xs" />
    <button class="btn -mx-5 bg-red-600 text-white font-semibold">Search</button>

    <p class="roboto-medium mt-20" style="text-align: right;">
      Wide range of travel options <br>
      Affordable prices <br>
      Personalized travel planning <br>
      24/7 support
    </p>
  </div>
  <!-- Inside Slider End -->

  <!-- Customized Services End -->
  <div class="cusomized-services">
    <h1 style=" padding-bottom: 20px; text-align: center; font-size: x-large; color:rgb(229, 14, 14); font-weight: bold;">
      Our customized services
    </h1>
    <div class="services">
      <!--card 1-->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="images/guided_tour.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Guided Tours</h2>
          <div class="card-actions">
            <button class="btn btn-primary">Details</button>
          </div>
        </div>
      </div>
      <!--Card 2-->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure class="px-10 pt-10">
          <img src="images/hotel_booking.jpg" alt="Shoes" class="rounded-xl" />
        </figure>
        <div class="card-body items-center text-center">
          <h2 class="card-title">Tour Packages</h2>
          <div class="card-actions">
            <button class="btn btn-primary"><a href="./tourPackage.php">Details</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Customized Services End -->

  <!-- Explore Top Destinations Start -->
  <div class="Explore-top-destinations">
    <h1 style="text-align: center; font-size: x-large; color:rgb(229, 14, 14); font-weight: bold;">
      Explore Top Destinations
    </h1>
    <br><br>
    <div class="top-destinations-cards">
      <!-- card 1 Start -->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="images/lalbag.jpg" alt="Shoes" /></figure>
        <!--modal-->
        <!-- Open the modal using ID.showModal() method -->
        <button class="btn" onclick="my_modal_1.showModal()">Lalbagh fort</button>
        <dialog id="my_modal_1" class="modal">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Lalbagh fort</h3> <br>
            <div class="flex gap-4">
              <img style="height: 220px; width: 150px;" src="images/lalbag.jpg" alt="">
              <img style="height: 220px; width: 150px;" src="images/lalbagh 2nd.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/lalbagh 3rd.jpeg" alt="">
            </div>
            <p class="py-4">Lalbagh Fort is a 17th century Mughal fortified palace in Dhaka which was never completed. In the mid 19th century, the Lalbagh Fort was the scene of ultimately unsuccessful evolts by the local soldiers against the British during the Great Rebellion.</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <a href="./places/lalbaghFort.php" style="color: rgb(248, 63, 63);font-weight: bold;">Read more</a>
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>
      <!-- Card 1 End -->

      <!-- Card 2 Start -->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="images/curzon hall.jpeg" alt="Shoes" /></figure>
        <!--modal-->
        <!-- Open the modal using ID.showModal() method -->
        <button class="btn" onclick="my_modal_2.showModal()">Dhaka University</button>
        <dialog id="my_modal_2" class="modal">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Dhaka University</h3> <br>
            <div class="flex gap-4">
              <img style="height: 220px; width: 150px;" src="images/du 1.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/du 2.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/du 3.jpeg" alt="">
            </div>
            <p class="py-4">The University of Dhaka (Bengali: ঢাকা বিশ্ববিদ্যালয়; also known as Dhaka University or DU) is a public research university located in Dhaka, Bangladesh. It was established in 1921 as University of Dacca and it is the oldest active university in Bangladesh.</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <a href="/places/DU.html" style="color: rgb(248, 63, 63);font-weight: bold;">Read more</a>
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>
      <!-- Card 2 End -->

      <!-- Card 3 Start -->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="images/botanical.jpeg" alt="Shoes" /></figure>
        <!--modal-->
        <!-- Open the modal using ID.showModal() method -->
        <button class="btn" onclick="my_modal_3.showModal()">Botanical garden</button>
        <dialog id="my_modal_3" class="modal">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Botanical garden</h3>
            <div class="flex gap-4">
              <img style="height: 220px; width: 150px;" src="images/botanical 2.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/botanical.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/botanical 3.jpeg" alt="">
            </div>
            <p class="py-4">The National Botanic Garden of Bangladesh and the Bangladesh National Herbarium make up the largest plant conservation center in Bangladesh, with an area of around 84 hectares (210 acres). It is located at Mirpur-2 in Dhaka - 1100, beside the Bangladesh National Zoo. It was established in 1961. It is a botanic garden, a knowledge center for nature lovers and botanists and a tourist destination. The herbarium has a scientific collection of approximately 100,000 preserved specimens of plants.</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <a href="/places/Botanical.html" style="color: rgb(248, 63, 63);font-weight: bold;">Read more</a>
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>
      <!-- Card 3 End -->

      <!-- Card 4 Start -->
      <div class="card w-96 bg-base-100 shadow-xl">
        <figure><img src="images/ju.jpeg" alt="Shoes" /></figure>
        <!--modal-->
        <!-- Open the modal using ID.showModal() method -->
        <button class="btn" onclick="my_modal_4.showModal()">Jahangirnagar University</button>
        <dialog id="my_modal_4" class="modal modal-bottom sm:modal-middle">
          <div class="modal-box">
            <h3 class="font-bold text-lg">Jahangirnagar University</h3> <br>
            <div class="flex gap-4">
              <img style="height: 220px; width: 150px;" src="images/ju.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/JU 2.jpeg" alt="">
              <img style="height: 220px; width: 150px;" src="images/JU 3.jpeg" alt="">
            </div>
            <p class="py-4">Jahangirnagar University is a public research institution located in Savar, Dhaka, Bangladesh. It was established in 1970, by the Jahangirnagar Muslim University Ordinance of the Pakistani Government. After Bangladesh gained independence, the university was reconstituted as Jahangirnagar University in 1971, under the Jahangirnagar University Act of 1973.</p>
            <div class="modal-action">
              <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <a href="/places/ju.html" style="color: rgb(248, 63, 63);font-weight: bold;">Read more</a>
                <button class="btn">Close</button>
              </form>
            </div>
          </div>
        </dialog>
      </div>
    </div>
    <!-- Card 4 End -->
  </div>
  <!-- Explore Top Destinations End -->
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->