<?php

ob_start();
?>
    <div id="menu">
        <div></div>
        <div class="menu-title">
            Gestion des abscences
        </div>
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
                <li class="text-warning"><a href="#"><div>Valider abscences</a></li>
            </ul>
        </div>
    </div>
    <div class="after-menu"></div>
<?php
$header = ob_get_clean();
