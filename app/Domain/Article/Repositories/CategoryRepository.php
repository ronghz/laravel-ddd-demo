<?php

namespace App\Domain\Article\Repositories;

use Ronghz\LaravelDdd\Framework\Base\DddRepository;
use App\Domain\Article\Models\Category;

class CategoryRepository extends DddRepository
{
    /** @var Category */
    protected $model = null;
}
