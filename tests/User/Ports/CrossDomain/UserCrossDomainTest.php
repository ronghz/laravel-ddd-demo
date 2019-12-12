<?php
namespace Tests\User\Ports\CrossDomain;

use App\Domain\User\Ports\CrossDomain\UserCrossDomain;

class UserCrossDomainTest extends \TestCase
{
    /** @var UserCrossDomain */
    private $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = app(UserCrossDomain::class);
    }
}
