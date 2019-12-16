<?php

namespace App\Domain\Article\Services;

use Ronghz\LaravelDdd\Framework\Base\DddDomainService;
use App\Domain\Article\Repositories\ArticleRepository;

class ArticleService extends DddDomainService
{

    /** @var ArticleRepository */
    protected $repository = null;

    public function findAll()
    {
        return $this->repository->all();
    }

    public function paginate()
    {
        return $this->repository->paginate();
    }

    public function findById($id)
    {
        return $this->repository->find($id);
    }

}
