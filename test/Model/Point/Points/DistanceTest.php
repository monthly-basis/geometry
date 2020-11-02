<?php
namespace MonthlyBasis\GeometryTest\Model\Service\Point\Points;

use MonthlyBasis\Geometry\Model\Service as GeometryService;
use PHPUnit\Framework\TestCase;

class DistanceTest extends TestCase
{
    protected function setUp(): void
    {
        $this->distanceService = new GeometryService\Point\Points\Distance();
    }

    public function test_getDistance_samePoint_0()
    {
        $this->assertSame(
            0.0,
            $this->distanceService->getDistance(2, 3, 2, 3)
        );
    }

    public function test_getDistance_differentPoints_nonZero()
    {
        $this->assertSame(
            6.3,
            $this->distanceService->getDistance(-2, 3, 4, 5)
        );
    }
}
