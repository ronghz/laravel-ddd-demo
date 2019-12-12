<?php

namespace App\Domain\User\Ports\Customer\Services;

use App\Domain\Article\Ports\Cross\ArticleCross;
use Ronghz\LaravelDdd\Framework\Base\DddAppService;
use App\Domain\User\Repositories\UserRepository;
use App\Domain\User\Services\UserService as DomainService;;

class UserService extends DddAppService
{

    /** @var UserRepository */
    protected $repository = null;

    /** @var DomainService */
    protected $service = null;

    /** @var ArticleCross */
    private $articleCross = null;

    public function __construct(ArticleCross $articleCross)
    {
        parent::__construct();
        $this->articleCross = $articleCross;
    }

    public function callCross()
    {
        return $this->articleCross->getAll();
    }
}
