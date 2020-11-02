<?php
namespace MonthlyBasis\GeometryTest;

use MonthlyBasis\Geometry\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
