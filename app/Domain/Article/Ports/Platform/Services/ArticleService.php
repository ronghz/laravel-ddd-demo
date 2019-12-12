<?php

namespace App\Domain\Article\Ports\Platform\Services;

use Ronghz\LaravelDdd\Framework\Base\DddAppService;
use App\Domain\Article\Repositories\ArticleRepository;
use App\Domain\Article\Services\ArticleService as DomainService;;

class ArticleService extends DddAppService
{

    /** @var ArticleRepository */
    protected $repository = null;

    /** @var DomainService */
    protected $service = null;
}
