<?php

namespace App\Domain\User\Repositories;

use Ronghz\LaravelDdd\Framework\Base\DddRepository;
use App\Domain\User\Models\User;

class UserRepository extends DddRepository
{
    /** @var User */
    protected $model = null;
}
