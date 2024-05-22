<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Blogs";
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
  <!--hero part-->
  <div class="hero h-72 " style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center text-neutral-content">
      <div class="max-w-md">
        <h1 class="mb-5 text-5xl font-bold text-white">BLOG</h1>
        <p class="mb-5  text-white">Recent Travel blog posts</p>
        <button style="border: 1px solid #ea1313; border-radius: 4px; padding: 5px 10px; background-color: #e65d5d; font-weight: bold;">
          <a href="blogWrite.php">
            Write Blog
          </a>
        </button>
      </div>
    </div>
  </div>


  <div class="whole_blog_cards">
    <div class="blog-items">
      <h3 style="text-align: center; font-weight: bold;margin-top: 37px; margin-left: 700px;">BLOG POSTS</h3>
      <div class="dropdown dropdown-end mt-8 mr-4">
        <div tabindex="0" role="button" class="btn m-1 bg-red-500 text-white font-bold">Highlights</div>
        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-yellow-100 rounded-box w-52">
          <h2 style="font-weight: bold;">Places You Must Visit</h2>
          <li><a>Jahangirnagar University</a></li>
          <li><a>Dhaka University</a></li>
          <li><a>Bangabandhu Military Museum</a></li>
          <li><a>Lalbagh Fort</a></li>
          <li><a>Ahfan Manjil</a></li>
          <li><a>Baitul Mukarram Mosque</a></li>
        </ul>
      </div>
    </div>
    <!--blog cards-->

    <div class="blog_cards">

      <!--first card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/mosque-1.jpg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Baitul Mukarram Mosque</h2>
          <p>Topkhana Road, Dhaka</p>
          <div class="card-actions justify-end">
            <button class="btn  m-auto">Explore</button>
          </div>
        </div>
      </div>


      <!--second card-->
      <div class="blog_card w-96 bg-base-100  ">
        <figure><img style="height: 250px; width:400px ;" src="images/ahsan-manjil.jpg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Ahsan Manjil</h2>
          <p>Old City Old Dhaka, Dhaka</p>
          <div class="card-actions justify-end">
            <button class="btn m-auto">Explore</button>
          </div>
        </div>
      </div>

      <!--third card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/lalbagh 2nd.jpeg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Lalbagh Fort</h2>
          <p>Lalbagh rd, dhaka -1211
          </p>
          <div class="card-actions">
            <a style="margin: auto;" href="./places/lalbaghFort.php"><button class="btn  m-auto">Explore</button></a>
          </div>
        </div>
      </div>

    </div>


    <div class="blog_cards">

      <!--first card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/smrity1.jpg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">National Martyr's Monument</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions justify-end">
            <button class="btn  m-auto">Explore</button>
          </div>
        </div>
      </div>


      <!--second card-->
      <div class="blog_card w-96 bg-base-100  ">
        <figure><img style="height: 250px; width:400px ;" src="images/shahid-minar1.jpg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Central Shaheed Minar</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions justify-end">
            <button class="btn m-auto">Explore</button>
          </div>
        </div>
      </div>

      <!--third card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/botanical 2.jpeg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Botanical Garden</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions justify-end">
            <button class="btn  m-auto">Explore</button>
          </div>
        </div>
      </div>

    </div>


    <div class="blog_cards">

      <!--first card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/du 1.jpeg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">University of Dhaka</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions">
            <a style="margin: auto;" href="places/DU.html"><button class="btn m-auto">Explore</button></a>
          </div>
        </div>
      </div>


      <!--second card-->
      <div class="blog_card w-96 bg-base-100  ">
        <figure><img style="height: 250px; width:400px ;" src="images/buriganga1.jpeg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Buriganga Rever</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions justify-end">
            <button class="btn m-auto">Explore</button>
          </div>
        </div>
      </div>

      <!--third card-->
      <div class="blog_card w-96 bg-base-100 ">
        <figure><img style="height: 250px; width: 400px;" src="images/hatirjhil1.jpg" alt="Shoes" /></figure>
        <div class="card-body text-center ">
          <h2 class="blog-card-title">Hetir Jheel</h2>
          <p>Discover meticulously curated exhibits that showcase a wide array of artifacts, weaponry, and interactive displays.</p>
          <div class="card-actions justify-end">
            <button class="btn  m-auto">Explore</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Main End -->

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->