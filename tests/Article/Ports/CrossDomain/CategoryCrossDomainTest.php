<?php
namespace Tests\Article\Ports\CrossDomain;

use App\Domain\Article\Ports\CrossDomain\CategoryCrossDomain;

class CategoryCrossDomainTest extends \TestCase
{
    /** @var CategoryCrossDomain */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(CategoryCrossDomain::class);
    }
}
