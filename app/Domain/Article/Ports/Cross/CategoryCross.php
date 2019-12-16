<?php

namespace App\Domain\Article\Ports\Cross;

use Ronghz\LaravelDdd\Framework\Base\DddCross;
use App\Domain\Article\Services\CategoryService;

class CategoryCross extends DddCross
{

    /** @var CategoryService */
    protected $service = null;
}
