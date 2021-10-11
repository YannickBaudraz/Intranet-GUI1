<?php
namespace appCPNV;
require_once "src/controller/mainController.php";
use appCPNV\controller\mainController;

$maincontroller = new mainController();

$maincontroller->showDayCalendar();
