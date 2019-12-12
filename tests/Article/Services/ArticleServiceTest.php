<?php
namespace Tests\Article\Services;

use App\Domain\Article\Services\ArticleService;

class ArticleServiceTest extends \TestCase
{
    /** @var ArticleService */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(ArticleService::class);
    }
}
