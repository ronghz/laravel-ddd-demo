<?php

namespace App\Domain\Article\Ports\Cross;

use Ronghz\LaravelDdd\Framework\Base\DddCrossDomain;
use App\Domain\Article\Services\CategoryService;

class CategoryCross extends DddCrossDomain
{

    /** @var CategoryService */
    protected $service = null;
}
