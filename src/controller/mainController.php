<?php

namespace appCPNV\controller;

class mainController
{

    public function showCalender(string $calendarMode)
    {
        if ($calendarMode === 'day') {
            $menuDates = ['9 Nov.'];
            require_once "templates/dayCalendar.php";
        } else {
            $menuDates = ['8 Nov.', '14 Nov.'];
            require_once "templates/weekCalendar.php";
        }
    }

    public function showAbsencesCards()
    {
        require_once "templates/absencesCards.php";
    }

    public function showAbsencesTable()
    {
        require_once "templates/absencesTables.php";
    }
}
