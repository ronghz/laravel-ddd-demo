<?php
namespace Tests\Article\Services;

use App\Domain\Article\Services\CategoryService;

class CategoryServiceTest extends \TestCase
{
    /** @var CategoryService */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(CategoryService::class);
    }
}
