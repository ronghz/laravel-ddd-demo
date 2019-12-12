<?php
namespace Tests\User\Services;

use App\Domain\User\Services\UserService;

class UserServiceTest extends \TestCase
{
    /** @var UserService */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(UserService::class);
    }
}
