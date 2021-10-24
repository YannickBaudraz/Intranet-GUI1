<?php
namespace appCPNV\controller;
class mainController
{

    public function showDayCalendar()
    {
        require_once "templates/dayCalendar.php";
    }

    public function showWeekCalendar()
    {
        require_once "templates/weekCalendar.php";
    }

}
