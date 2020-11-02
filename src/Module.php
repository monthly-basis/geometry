<?php
namespace MonthlyBasis\Geometry;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use MonthlyBasis\Geometry\Controller as GeometryController;
use MonthlyBasis\Geometry\Model\Service as GeometryService;
use MonthlyBasis\Geometry\View\Helper as GeometryHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                GeometryService\Point\Points\Distance::class => function ($sm) {
                    return new GeometryService\Point\Points\Distance();
                },
            ],
        ];
    }
}
