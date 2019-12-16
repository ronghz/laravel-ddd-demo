<?php

namespace App\Domain\Article\Repositories;

use App\Domain\Article\Supports\Enums\ArticleStatusEnum;
use Ronghz\LaravelDdd\Framework\Base\DddRepository;
use App\Domain\Article\Models\Article;

class ArticleRepository extends DddRepository
{
    /** @var Article */
    protected $model = null;

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function paginate()
    {
        return $this->model->paginate();
    }

    public function findPublishedOrderByRecommend()
    {
        return $this->model->with('category.parent')
                            ->where('status', ArticleStatusEnum::PUBLISHED)
                            ->orderBy('recommend_order', 'desc')
                            ->paginate(15);
    }
}
