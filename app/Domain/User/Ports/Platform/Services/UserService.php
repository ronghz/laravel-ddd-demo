<?php

namespace App\Domain\User\Ports\Platform\Services;

use Ronghz\LaravelDdd\Framework\Base\DddAppService;
use App\Domain\User\Repositories\UserRepository;
use App\Domain\User\Services\UserService as DomainService;;

class UserService extends DddAppService
{

    /** @var UserRepository */
    protected $repository = null;

    /** @var DomainService */
    protected $service = null;
}
