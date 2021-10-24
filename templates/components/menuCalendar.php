<?php

ob_start();
?>
    <div id="menu">
        <div></div>
        <div class="menuWeek">
            <i class="fas fa-arrow-circle-left"></i>
            <div><span>6 septembre 2021</span></div>
            <i class="fas fa-arrow-circle-right"></i>
        </div>
        <div class="week-dayButton"><i class="fas fa-calendar-week"></i></div>
    </div>
    <div id="menu-container">
        <div class="bg"></div>
        <div class="burger" tabindex="0">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        <div id="nav-content" tabindex="0">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="#">Classes</a></li>
                <li><a href="#">Cours</a></li>
                <li><a href="#">Liste</a></li>
            </ul>
        </div>
    </div>
    <div class="after-menu"></div>
<?php
$header = ob_get_clean();
