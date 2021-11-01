<?php

ob_start();
?>
    <h1 class="schedule__title">Horaires</h1>

    <div class="schedule day-mode">

        <span class="track-slot row-s-tracks col-s-week col-e-week">Mardi 09.11</span>


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


        <div class="module module__passed col-all-week row-s-time-0950 row-e-time-1035">
            <h3 class="module__title"><a href="#">Gestion et organisation</a></h3>
            <span class="module__slots">09:50 - 10:35</span>
            <span class="module__teacher">ZEN-RUFFINEN Xavier</span>
            <span class="module__book"><a href="?action=showAbsencesCards"><i
                      class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__actual col-all-week row-s-time-1040 row-e-time-1215">
            <h3 class="module__title"><a href="#">SQL1</a></h3>
            <span class="module__slots">10:40 - 12:15</span>
            <span class="module__teacher">ANDOLFATTO Frederique</span>
            <span class="module__book"><a href="?action=showAbsencesCards"><i
                      class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>
        <div class="module module__future col-all-week row-s-time-1330 row-e-time-1655">
            <h3 class="module__title"><a href="?action=showAbsencesCards">MAW1.1 - E-Commerce</a></h3>
            <span class="module__slots">13:30 - 16:55</span>
            <span class="module__teacher">XCL PHI NGY</span>
            <span class="module__book"><a href="#"><i class="far fa-address-book"></i></a></span>
            <span class="module__room"><a href="#">SC-C332</a></span>
        </div>

    </div>

<?php
$headerPath = "templates/components/menuCalendar.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
