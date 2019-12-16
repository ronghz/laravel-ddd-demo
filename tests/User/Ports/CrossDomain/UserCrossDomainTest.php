<?php
namespace Tests\User\Ports\CrossDomain;

use App\Domain\User\Ports\CrossDomain\UserCross;

class UserCrossDomainTest extends \TestCase
{
    /** @var UserCross */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(UserCross::class);
    }
}
