<?php

namespace App\Domain\User\Ports\CrossDomain;

use Ronghz\LaravelDdd\Framework\Base\DddCrossDomain;
use App\Domain\User\Services\UserService;

class UserCrossDomain extends DddCrossDomain
{

    /** @var UserService */
    protected $service = null;
}
