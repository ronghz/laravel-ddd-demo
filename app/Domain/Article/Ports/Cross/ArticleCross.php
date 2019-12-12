<?php

namespace App\Domain\Article\Ports\Cross;

use Ronghz\LaravelDdd\Framework\Base\DddCrossDomain;
use App\Domain\Article\Services\ArticleService;

class ArticleCross extends DddCrossDomain
{
    /** @var ArticleService */
    protected $domainService = null;

    public function getAll()
    {
        return $this->response($this->domainService->findAll());
    }
}
