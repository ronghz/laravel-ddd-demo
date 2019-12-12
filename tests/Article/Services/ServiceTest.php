<?php
namespace Tests\Article\Services;

use App\Domain\Article\Services\Service;

class ServiceTest extends \TestCase
{
    /** @var Service */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(Service::class);
    }
}
