<?php

declare(strict_types=1);

namespace BNW\Converter;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class Formater
{
    /**
     * Responsible for formatting the result for hours only returns.
     *
     * @param string $value
     * @return string
     */
    public function toHours(string $value): string
    {
        return "{$value}:00";
    }

    /**
     * Responsible for formatting the hour and minute return.
     *
     * @param  string $hours
     * @param  string $minutes
     * @return string
     */
    public function toTime(string $hours, string $minutes): string
    {
        return "{$hours}:{$minutes}";
    }

    /**
     * Responsible for formatting the value with the minimum number of digits.
     *
     * @param  string $value
     * @return string
     */
    public function strPadLeft(string $value, int $digits): string
    {
        return str_pad($value, $digits, '0', STR_PAD_LEFT);
    }
}
