<?php
namespace App\Domain\User\Supports\Dtos;

use Ronghz\LaravelDdd\Framework\Base\DddDto;
use App\Domain\User\Models\User;

class UserDto extends DddDto
{
    /** @var User */
    protected $model = null;
}
