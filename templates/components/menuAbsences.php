<?php

ob_start();
?>
    <div id="menu">
        <div></div>
        <h5 class="menu-title">
            Gestion des abscences
        </h5>
        <div class="return-arrow">
            <i class="fas fa-arrow-circle-left"></i>
        </div>
    </div>
    <div id="menu-container">
        <div class="bg"></div>
        <div class="burger" tabindex="0">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div id="nav-content" tabindex="0" class="overflow-auto">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Cours</a></li>
                <li><a href="#">Liste</a></li>
                <hr>
                <li><h6>Outils abscences:</h6></li>
                <li><div class="btn unjustified">Absence injustifiée</div></li>
                <li><div class="btn excluded">Exclusion</div></li>
                <li><div class="btn justified">Absence justifiée</div></li>
                <li><div class="btn expired">Ab. j. hors délai</div></li>
                <li><div class="btn granted">Congé accordé</div></li>
                <li><div class="btn late">Arrivée tardive</div></li>
                <li><div class="btn appointment">Rendez-vous / externe</div></li>
                <li><div class="btn restraint">Appui/Retenue</div></li>
                <li><div class="btn notDone">Devoir non fait</div></li>
                <li><div class="btn erase">Effacer</div></li>
                <br>
                <li class="text-warning"><a class="validate" href="#"><div class="btn validate">Valider présences</div></a></li>
                <br>
                <br>
                <br>
            </ul>
        </div>
    </div>
    <div class="after-menu"></div>
<?php
$header = ob_get_clean();
