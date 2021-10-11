<?php
ob_start();
?>

<?php
$headerPath = "templates/components/menuCalendar.php";
$contenu = ob_get_clean();

require "templates/Layout.php";