<?php
require __DIR__ . "/includes/common/header.php";
?>

<?php
require __DIR__ . "/includes/common/navbar.php";
?>


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
                    <h3 class="font-bold text-lg">Minimal Trip</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/lalbag.jpg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/lalbagh 2nd.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/lalbagh 3rd.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step step-primary">Chandrima Udyan</li>
                        <li class="step step-primary">Sohrawardy Udyan</li>
                        <li class="step">Museum of Independence</li>
                        <li class="step">Ramna Park</li>
                        <li class="step">Sadarghat River Port</li>
                    </ul>
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
                    <h3 class="font-bold text-lg">Spiritual Spirit</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/du 1.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/du 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/du 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step step-primary">Tara Masjid</li>
                        <li class="step step-primary">Dhakeshwari Tample</li>
                        <li class="step">Armenian Church</li>
                        <li class="step">National Mosque</li>
                        <li class="step">Bait ur Rouf Mosque</li>
                    </ul>
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
            <button class="btn" onclick="my_modal_3.showModal()">Sneak Peak</button>
            <dialog id="my_modal_3" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Sneak Peak</h3>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/botanical 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/botanical.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/botanical 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step step-primary">National Botanical Garden</li>
                        <li class="step step-primary">Bangladesh National Zoo</li>
                        <li class="step">Bangladesh National Museum</li>
                    </ul>
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
                    <h3 class="font-bold text-lg">Tour of History</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/ju.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step step-primary">Lal Bagh Kella</li>
                        <li class="step step-primary">Ahsan Manjil</li>
                        <li class="step">National War Museaum</li>
                    </ul>
                    <ul class="steps">
                        <li data-content="4" class="step">Parliament House</li>
                        <li data-content="5" class="step">Zinda Park</li>
                    </ul>
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
                    <h3 class="font-bold text-lg">Fun Fair</h3> <br>
                    <div class="flex gap-4">
                        <img style="height: 220px; width: 150px;" src="images/ju.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 2.jpeg" alt="">
                        <img style="height: 220px; width: 150px;" src="images/JU 3.jpeg" alt="">
                    </div>
                    <p class="py-4">
                    <ul class="steps">
                        <li class="step step-primary">Military Museaum</li>
                        <li class="step step-primary">Novo Theatre</li>
                        <li class="step">3D Art Gallery</li>
                        <li class="step">Toggi Fun World</li>
                    </ul>
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


<!--Footer Part-->
<?php
require __DIR__ . "/includes/common/footer.php";
?>