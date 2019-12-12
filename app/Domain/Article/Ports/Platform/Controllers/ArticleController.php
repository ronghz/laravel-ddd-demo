<?php

namespace App\Domain\Article\Ports\Platform\Controllers;

use App\Supports\BaseController\PlatformController;
use App\Domain\Article\Services\ArticleService as DomainService;
use App\Domain\Article\Ports\Platform\Services\ArticleService as AppService;

class ArticleController extends PlatformController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;
}
