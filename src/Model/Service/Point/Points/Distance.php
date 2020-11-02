<?php
namespace MonthlyBasis\Geometry\Model\Service\Point\Points;

class Distance
{
    public function getDistance(
        $x1,
        $y1,
        $x2,
        $y2
    ): float {
        $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        return round($distance, 1);
    }
}
