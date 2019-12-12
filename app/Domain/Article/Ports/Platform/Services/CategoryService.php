<?php

namespace App\Domain\Article\Ports\Platform\Services;

use Ronghz\LaravelDdd\Framework\Base\DddAppService;
use App\Domain\Article\Repositories\CategoryRepository;
use App\Domain\Article\Services\CategoryService as DomainService;;

class CategoryService extends DddAppService
{

    /** @var CategoryRepository */
    protected $repository = null;

    /** @var DomainService */
    protected $service = null;
}
