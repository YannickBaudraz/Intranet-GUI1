<?php

ob_start();

?>

<div id="absenceCards">
    <div></div>
</div>


<?php
$headerPath = "templates/components/menuAbsences.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
