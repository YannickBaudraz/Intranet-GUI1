<?php

ob_start();
?>
    <div id="menu">
        <div class="menuBurger">
            <i class="fas fa-bars fa-2x"></i>
        </div>

        <div class="menuWeek">

            <i class="fas fa-arrow-circle-left"></i>
            <div><span>6 septembre 2021</span></div>
            <i class="fas fa-arrow-circle-right"></i>

        </div>
        <div class="week-dayButton"><i class="fas fa-calendar-week"></i></div>
    </div>
    <div class="after-menu"></div>
<?php
$header = ob_get_clean();
