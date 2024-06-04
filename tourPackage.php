<!-- Session File Start -->
<?php
require_once __DIR__ . "/includes/config_session.inc.php";
?>
<!-- Session File End -->

<!-- Head of HTML Document -->
<?php
$title = "Tour Packages";
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

<main>
    <div class="top-destinations-cards py-10">
        <!--card 1-->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="images/lalbag.jpg" alt="Shoes" /></figure>
            <!--modal-->
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_1.showModal()">Minimal Trip</button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Minimal Trip (2 Days)</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/lalbag.jpg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/lalbagh 2nd.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/ramna.jpg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step">Chandrima Udyan</li>
                        <li class="step">Sohrawardy Udyan</li>
                        <li class="step">Museum of Independence</li>
                        <li class="step">Ramna Park</li>
                        <li class="step">Sadarghat River Port</li>
                    </ul>

                    <div class="mt-5">
                        <p>
                            <span class="font-semibold">Transport Cost:</span> 50Tk
                        </p>
                        <p>
                            <span class="font-semibold">Stay Cost:</span> Free
                        </p>
                        <p>
                            <span class="font-semibold">Food Cost:</span> 150Tk
                        </p>
                        <p>
                            <span class="font-semibold">Total Cost:</span> 200Tk
                        </p>
                    </div>
                    </p>
                    <div class="modal-action">
                        <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <a href="/places/lalbaghFort.html" style="color: rgb(248, 63, 63);font-weight: bold;">Read more</a>
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>
        </div>

        <!--card 2-->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="images/curzon hall.jpeg" alt="Shoes" /></figure>
            <!--modal-->
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_2.showModal()">Spiritual Spirit</button>
            <dialog id="my_modal_2" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Spiritual Spirit (2 Days)</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/du 1.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/du 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/du 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step">Armenian Church</li>
                        <li class="step">Tara Masjid</li>
                        <li class="step">Dhakeshwari Tample</li>
                        <li class="step">National Mosque</li>
                    </ul>
                    <div class="mt-5">
                        <p>
                            <span class="font-semibold">Transport Cost:</span> 40Tk
                        </p>
                        <p>
                            <span class="font-semibold">Stay Cost:</span> Free
                        </p>
                        <p>
                            <span class="font-semibold">Food Cost:</span> 300Tk
                        </p>
                        <p>
                            <span class="font-semibold">Total Cost:</span> 340Tk
                        </p>
                    </div>
                    </p>
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

        <!--card 3-->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="images/botanical.jpeg" alt="Shoes" /></figure>
            <!--modal-->
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_3.showModal()">Sneak Peek</button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Sneak Peak (3 Days)</h3>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/botanical 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/botanical.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/botanical 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step">National Botanical Garden</li>
                        <li class="step">Bangladesh National Zoo</li>
                        <li class="step">Bangladesh National Museum</li>
                    </ul>
                    <div class="mt-5">
                        <p>
                            <span class="font-semibold">Transport Cost:</span> 1000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Entry Cost:</span> 570Tk
                        </p>
                        <p>
                            <span class="font-semibold">Stay Cost:</span> 4500Tk
                        </p>
                        <p>
                            <span class="font-semibold">Food Cost:</span> 3000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Total Cost:</span> 9070Tk
                        </p>
                    </div>
                    </p>
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
        <!--card 4-->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="images/ju.jpeg" alt="Shoes" /></figure>
            <!--modal-->
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_4.showModal()">Tour of History</button>
            <dialog id="my_modal_4" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Tour of History (4 Days)</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/ju.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step">Lal Bagh Kella</li>
                        <li class="step">Ahsan Manjil</li>
                        <li class="step">National War Museaum</li>
                    </ul>
                    <ul class="steps">
                        <li data-content="4" class="step">Parliament House</li>
                        <li data-content="5" class="step">Zinda Park</li>
                    </ul>

                    <div class="mt-5">
                        <p>
                            <span class="font-semibold">Transport Cost:</span> 1200Tk
                        </p>
                        <p>
                            <span class="font-semibold">Entry Cost:</span> 900Tk
                        </p>
                        <p>
                            <span class="font-semibold">Stay Cost:</span> 6000 Tk
                        </p>
                        <p>
                            <span class="font-semibold">Food Cost:</span> 6000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Total Cost:</span> 14100Tk
                        </p>
                    </div>
                    </p>
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

        <!--card 5-->
        <div class="card w-96 bg-base-100 shadow-xl">
            <figure><img src="images/botanical.jpeg" alt="Shoes" /></figure>
            <!--modal-->
            <!-- Open the modal using ID.showModal() method -->
            <button class="btn" onclick="my_modal_5.showModal()">Fun Fair</button>
            <dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Fun Fair (3 Days)</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/ju.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step">Military Museaum</li>
                        <li class="step">Novo Theatre</li>
                        <li class="step">3D Art Gallery</li>
                        <li class="step">Toggi Fun World</li>
                    </ul>
                    <div class="mt-5">
                        <p>
                            <span class="font-semibold">Transport Cost:</span> 2000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Entry Cost:</span> 4500Tk
                        </p>
                        <p>
                            <span class="font-semibold">Stay Cost:</span> 6000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Food Cost:</span> 6000Tk
                        </p>
                        <p>
                            <span class="font-semibold">Total Cost:</span> 18500Tk
                        </p>
                    </div>
                    </p>
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

</main>

<!-- Footer Section Start -->
<?php
$CSSPath = "./css/style.css";
require "common/footer.php";
?>
<!-- Footer Section End -->