<?php

namespace App\Domain\User\Services;

use Ronghz\LaravelDdd\Framework\Base\DddDomainService;
use App\Domain\User\Repositories\UserRepository;

class UserService extends DddDomainService
{

    /** @var UserRepository */
    protected $repository = null;
}
