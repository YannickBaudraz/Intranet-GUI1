<?php
ob_start();
?>
    <div id="menu">
        <div class="menuBurger">
            <img src="templates/content/svg/menu.svg" alt="menu burger"/>
        </div>

        <div class="menuWeek">

            <i class="fas fa-arrow-circle-left"></i>
            <div><span>6 septembre 2021</span></div>
            <i class="fas fa-arrow-circle-right"></i>

        </div>
        <div class="week-dayButton"><i class="fas fa-calendar-week"></i></div>
    </div>
<?php
$header = ob_get_clean();
