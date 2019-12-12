<?php
namespace Tests\Article\Ports\CrossDomain;

use App\Domain\Article\Ports\CrossDomain\ArticleCrossDomain;

class ArticleCrossDomainTest extends \TestCase
{
    /** @var ArticleCrossDomain */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(ArticleCrossDomain::class);
    }
}
