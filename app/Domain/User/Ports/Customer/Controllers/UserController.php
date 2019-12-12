<?php

namespace App\Domain\User\Ports\Customer\Controllers;

use App\Supports\BaseController\CustomerController;
use App\Domain\User\Services\UserService as DomainService;
use App\Domain\User\Ports\Customer\Services\UserService as AppService;
use Illuminate\Http\Request;

class UserController extends CustomerController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;

    public function getCross(Request $request)
    {
        return $this->appService->callCross();
    }
}
