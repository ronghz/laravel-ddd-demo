<?php
namespace Tests\Article\Ports\Cross;

use App\Domain\Article\Ports\Cross\CategoryCross;

class CategoryCrossDomainTest extends \TestCase
{
    /** @var CategoryCross */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(CategoryCross::class);
    }
}
