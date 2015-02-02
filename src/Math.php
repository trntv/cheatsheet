<?php
namespace knowledge;

/**
 * Class Math
 * @author Eugene Terentev <eugene@terentev.net>
 * @package knowledge
 */
class Math {
    /**
     * @param bool $invert
     * @return float
     */
    public static function goldenRatio($invert = false)
    {
        $goldenRatio = ( 1 + sqrt(5) ) / 2;
        return $invert ? 1 / $goldenRatio : $goldenRatio;
    }
}