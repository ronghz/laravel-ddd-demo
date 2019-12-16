<?php

namespace App\Domain\Article\Ports\Cross;

use Ronghz\LaravelDdd\Framework\Base\DddCross;
use App\Domain\Article\Services\ArticleService;

class ArticleCross extends DddCross
{
    /** @var ArticleService */
    protected $domainService = null;

    public function findAll()
    {
        return $this->response($this->domainService->findAll());
    }

    public function findById($id)
    {
        return $this->response($this->domainService->findById($id));
    }
}
