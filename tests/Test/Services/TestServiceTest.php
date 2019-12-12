<?php
namespace Tests\Test\Services;

use App\Domain\Test\Services\TestService;

class TestServiceTest extends \TestCase
{
    /** @var TestService */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(TestService::class);
    }
}
