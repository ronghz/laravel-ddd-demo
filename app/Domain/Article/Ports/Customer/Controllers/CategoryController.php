<?php

namespace App\Domain\Article\Ports\Customer\Controllers;

use App\Supports\BaseController\CustomerController;
use App\Domain\Article\Services\CategoryService as DomainService;
use App\Domain\Article\Ports\Customer\Services\CategoryService as AppService;

class CategoryController extends CustomerController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;
}
