<?php

namespace appCPNV;

require_once "src/controller/mainController.php";

use appCPNV\controller\mainController;

$mainController = new mainController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'showCalender':
            $mainController->showCalender($_GET['calendar-mode'] ?? 'week');
            break;
        case 'showAbsencesCards':
            $mainController->showAbsencesCards();
            break;
        default:
            $mainController->showHome();
    }
}else{
    $mainController->showCalender('day');
}