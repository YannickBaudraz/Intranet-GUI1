<?php

ob_start();

?>

    <h1 class="schedule__title">Horaires</h1>
    <!--Refer to the file _schedule.scss to know what to use-->
    <div class="schedule">

        <span class="track-slot row-s-tracks col-s-mo">Lundi 08.11</span>
        <span class="track-slot row-s-tracks col-s-tu">Mardi 09.11</span>
        <span class="track-slot row-s-tracks col-s-we">Mercredi 10.11</span>
        <span class="track-slot row-s-tracks col-s-th">Jeudi 11.11</span>
        <span class="track-slot row-s-tracks col-s-fr">Vendredi 12.11</span>


        <div class="info col-s-week col-e-week">
            <div>Année 2021-2022</div>
            <div>1er semestre</div>
            <div>1er trimestre</div>
            <div>Semaine COM 1</div>
        </div>


        <div class="time-slot row-s-time-0800">8:00</div>
        <div class="time-slot row-s-time-1000">10:00</div>
        <div class="time-slot row-s-time-1215">12:15</div>
        <div class="time-slot row-s-time-1330">13:30</div>
        <div class="time-slot row-s-time-1500">15:00</div>
        <div class="time-slot row-s-time-1700">17:00</div>


        <div class="module module__passed col-s-monday row-s-time-0800 row-e-time-1215">
            <h3 class="module__title"><a href="#">GUI1</a></h3>
            <span class="module__slots">08:00 - 12:15</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__passed col-s-mo row-s-time-1330 row-e-time-1605">
            <h3 class="module__title"><a href="#">Physique</a></h3>
            <span class="module__slots">13:30 - 16:05</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

        <div class="module module__passed col-s-tu row-s-time-0800 row-e-time-0935">
            <h3 class="module__title"><a href="#">GPR1</a></h3>
            <span class="module__slots">08:00 - 09:35</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__passed col-s-tu row-s-time-0950 row-e-time-1035">
            <h3 class="module__title"><a href="#">Gestion et organisation</a></h3>
            <span class="module__slots">09:50 - 10:35</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__passed col-s-tu row-s-time-1040 row-e-time-1215">
            <h3 class="module__title"><a href="#">SQL1</a></h3>
            <span class="module__slots">10:40 - 12:15</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__actual col-s-tu row-s-time-1330 row-e-time-1655">
            <h3 class="module__title"><a href="#">MAW1.1 - E-Commerce</a></h3>
            <span class="module__slots">13:30 - 16:55</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

        <div class="module module__future col-s-we row-s-time-0800 row-e-time-0935">
            <h3 class="module__title"><a href="#">Mathématiques</a></h3>
            <span class="module__slots">08:00 - 09:35</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-s-we row-s-time-0950 row-e-time-1215">
            <h3 class="module__title"><a href="#">Suivi Stages ES</a></h3>
            <span class="module__slots">09:50 - 12:15</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-s-we row-s-time-1330 row-e-time-1655">
            <h3 class="module__title"><a href="#">Suivi Stages ES</a></h3>
            <span class="module__slots">13:30 - 16:55</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

        <div class="module module__future col-s-th row-s-time-0800 row-e-time-1035">
            <h3 class="module__title"><a href="#">MAW1.1 - E-Commerce</a></h3>
            <span class="module__slots">08:00 - 10:35</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-s-th row-s-time-1040 row-e-time-1215">
            <h3 class="module__title"><a href="#">Anglais</a></h3>
            <span class="module__slots">10:40 - 12:15</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room">
                <a href="#"><span>SC-C435</span></a>
                <a href="#"><span>SC-C332</span></a>
                <a href="#"><span>SC-C311</span></a>
            </span>
        </div>
        <div class="module module__future col-s-th row-s-time-1330 row-e-time-1505">
            <h3 class="module__title"><a href="#">Mathématiques</a></h3>
            <span class="module__slots">13:30 - 15:05</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

        <div class="module module__future col-s-fr row-s-time-0950 row-e-time-1215">
            <h3 class="module__title"><a href="#">PRW1</a></h3>
            <span class="module__slots">09:50 - 12:15</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-s-fr row-s-time-1330 row-e-time-1505">
            <h3 class="module__title"><a href="#">CLD1</a></h3>
            <span class="module__slots">13:30 - 15:05</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-s-th row-s-time-1520 row-e-time-1655">
            <h3 class="module__title"><a href="#">Français</a></h3>
            <span class="module__slots">15:20 - 16:55</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

    </div>

<?php
$headerPath = "templates/components/menuCalendar.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
