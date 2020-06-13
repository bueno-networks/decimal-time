<?php declare(strict_types=1);

namespace BNW\Converter;

use BNW\Converter\Calculate;
use BNW\Converter\Formater;

/**
 * @author Diego Brocanelli <diego.brocanelli@buenonetworks.com.br>
 */
class DecimalToTime
{
    /**
     * Responsible for converting the decimal value to time
     *
     * @param  float $value
     * @return string
     */
    public function convert(float $value) : string
    {
        $formater = new Formater();

        $valueExplode = explode('.', (string)$value);

        $hours = $formater->strPadLeft($valueExplode[0], 2);
        // If the value contains only hours.
        if( count($valueExplode) == 1){
            return $formater->toHours($hours);
        }

        $minutes = (new Calculate)->toMinutes( $valueExplode[1] );
        $minutes = $formater->strPadLeft( (string)$minutes, 2);

        return $formater->toTime($hours, $minutes);
    }
}
