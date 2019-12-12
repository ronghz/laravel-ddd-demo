<?php
namespace Tests\Test\Ports\CrossDomain;

use App\Domain\Test\Ports\CrossDomain\TestCrossDomain;

class TestCrossDomainTest extends \TestCase
{
    /** @var TestCrossDomain */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(TestCrossDomain::class);
    }
}
