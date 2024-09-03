<?php

use Carbon\Carbon;

if (!function_exists('jobDeadLineCheck')) {
    function jobDeadLineCheck($date)
    {
        if (Carbon::parse($date)->format('Y-m-d') <= Carbon::now()->format('Y-m-d')) {
            return true;
        }
        return false;
    }
}
