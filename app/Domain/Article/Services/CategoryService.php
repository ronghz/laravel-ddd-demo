<?php

namespace App\Domain\Article\Services;

use Ronghz\LaravelDdd\Framework\Base\DddDomainService;
use App\Domain\Article\Repositories\CategoryRepository;

class CategoryService extends DddDomainService
{

    /** @var CategoryRepository */
    protected $repository = null;
}
