<?php

namespace App\Domain\Article\Ports\Platform\Controllers;

use App\Supports\BaseController\PlatformController;
use App\Domain\Article\Services\CategoryService as DomainService;
use App\Domain\Article\Ports\Platform\Services\CategoryService as AppService;

class CategoryController extends PlatformController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;
}
