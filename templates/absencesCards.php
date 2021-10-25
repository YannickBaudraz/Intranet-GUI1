<?php

ob_start();

?>


<?php
$headerPath = "templates/components/menuAbsences.php";
$contenu = ob_get_clean();

require "templates/Layout.php";
