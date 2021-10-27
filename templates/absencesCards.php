<?php

ob_start();

?>
    <script>document.addEventListener('DOMContentLoaded', absenceCardsLoadEvenlistner);</script>
    <div id="absenceCards">
        <?php for($i=1;$i<=18;$i++): ?>
        <div class="studentCard present" id="student<?=$i?>">
            <div class="picture" style="background-image: url('templates/images/student.png');">
                CARVALHO-SANTOS Joan-Alexandre
            </div>
        </div>
        <?php endfor; ?>
    </div>


<?php
$headerPath = "templates/components/menuAbsences.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
