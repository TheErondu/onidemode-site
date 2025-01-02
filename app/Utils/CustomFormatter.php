<?php

namespace App\Utils;

use Carbon\Carbon;

class CustomFormatter
{
    public static function formatPhoneNumber(string $phone): string
    {
        $phone = preg_replace('/[^0-9]/', '', $phone);
        $phone = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phone);

        return $phone;
    }

    public static function formatAvailability(array $availability): string
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
        $formattedDays = [];

        foreach ($availability as $index => $day) {
            if ($day) {
                $formattedDays[] = $days[$index];
            }
        }

        return implode(', ', $formattedDays);
    }

    public static function formatDate(string $date): string
    {
        return Carbon::parse($date)->format('D, M d, Y');
    }
}
