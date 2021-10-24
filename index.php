<?php
namespace appCPNV;
require_once "src/controller/mainController.php";
use appCPNV\controller\mainController;

$mainController = new mainController();

$mainController->showWeekCalendar();
