<?php
namespace Tests\Article\Ports\CrossDomain;

use App\Domain\Article\Ports\CrossDomain\CrossDomain;

class CrossDomainTest extends \TestCase
{
    /** @var CrossDomain */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(CrossDomain::class);
    }
}
