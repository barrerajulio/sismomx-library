<?php
namespace CodeandoMexico\Sismomx\Core\Traits\Base;

/**
 * Trait DatesHelper
 * @package CodeandoMexico\Sismomx\Core\Traits\Base
 */
trait DatesHelper
{
    /**
     * @param $date
     * @param $format
     * @return string
     */
    public function stringToDate($date,$format,$default = null)
    {
        if ($default == 'now') {
            $default = date('Y-m-d H:i:s');
        }
        $date = date_create_from_format($format,$date);
        if ($date === false) {
            return $default;
        }
        return $date->format('Y-m-d H:i:s');
    }
}