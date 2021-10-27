<?php

ob_start();
?>
    <script>document.addEventListener('DOMContentLoaded', absenceToolsLoadEventListner);</script>
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
                <li><a href="?">Accueil</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Cours</a></li>
                <li><a href="#">Liste</a></li>
                <hr>
                <li><h6>Outils abscences:</h6></li>
                <li><div class="btn toolBtn unjustified">Absence injustifiée</div></li>
                <li><div class="btn toolBtn excluded">Exclusion</div></li>
                <li><div class="btn toolBtn justified">Absence justifiée</div></li>
                <li><div class="btn toolBtn expired">Ab. j. hors délai</div></li>
                <li><div class="btn toolBtn granted">Congé accordé</div></li>
                <li><div class="btn toolBtn late">Arrivée tardive</div></li>
                <li><div class="btn toolBtn appointment">Rendez-vous / externe</div></li>
                <li><div class="btn toolBtn restraint">Appui/Retenue</div></li>
                <li><div class="btn toolBtn notDone">Devoir non fait</div></li>
                <li><div class="btn toolBtn erase">Effacer</div></li>
                <br>
                <li class="text-warning"><a class="validate" href="#"><div class="btn validate">Valider présences</div></a></li>
                <div class="spacer"></div>
            </ul>
            <div class="spacer"></div>
        </div>
    </div>
    <div class="after-menu"></div>
<?php
$header = ob_get_clean();
