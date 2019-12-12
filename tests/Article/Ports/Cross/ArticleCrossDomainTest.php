<?php
namespace Tests\Article\Ports\Cross;

use App\Domain\Article\Ports\Cross\ArticleCross;

class ArticleCrossDomainTest extends \TestCase
{
    /** @var ArticleCross */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(ArticleCross::class);
    }
}
