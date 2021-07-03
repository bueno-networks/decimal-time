<?php

declare(strict_types=1);

namespace BNW\Converter;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class Calculate
{
    /**
     * Responsible for calculating the value for minute
     *
     * @example $value = '34'; return 20
     *
     * @param  string $value
     * @return integer
     */
    public function toMinutes(string $value): int
    {
        $value = "0.{$value}";
        $value = (float)$value;
        $value = round($value * 60);

        $result = (int)$value;

        return $result;
    }
}
