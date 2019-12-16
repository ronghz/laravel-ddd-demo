<?php

namespace App\Domain\User\Ports\CrossDomain;

use Ronghz\LaravelDdd\Framework\Base\DddCross;
use App\Domain\User\Services\UserService;

class UserCross extends DddCross
{

    /** @var UserService */
    protected $service = null;
}
