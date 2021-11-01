<?php

ob_start();
?>
    <div id="menu">
        <div></div>
        <div class="menuWeek">
            <i class="fas fa-arrow-circle-left"></i>
            <?php if (count($menuDates) > 1): ?>
                <div class="weektext"><span>Du <?= $menuDates[0] ?> au <?= $menuDates[1] ?> 2021</span></div>
            <?php else: ?>
                <div><span><?= $menuDates[0] ?> 2021</span></div>
            <?php endif; ?>
            <i class="fas fa-arrow-circle-right"></i>
        </div>
        <a class="week-dayButton"
           href="?action=showCalender&calendar-mode=<?= $calendarMode === 'day' ? 'week' : 'day' ?>"
        >
            <i class="fas fa-calendar-week"></i>
        </a>
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
                <li><a href="?">Accueil</a></li>
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
