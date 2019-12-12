<?php

namespace App\Domain\User\Ports\Platform\Controllers;

use App\Supports\BaseController\PlatformController;
use App\Domain\User\Services\UserService as DomainService;
use App\Domain\User\Ports\Platform\Services\UserService as AppService;

class UserController extends PlatformController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;
}
