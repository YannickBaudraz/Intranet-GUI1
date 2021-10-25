<?php

namespace appCPNV\controller;

class mainController
{

    public function showCalender(string $calendarMode)
    {
        if ($calendarMode === 'day') {
            $menuDates = ['9 Novembre'];
            require_once "templates/dayCalendar.php";
        } else {
            $menuDates = ['8 Novembre', '14 Novembre'];
            require_once "templates/weekCalendar.php";
        }
    }

    public function showAbsencesCards(){
        require_once "templates/absencesCards.php";
    }
}
