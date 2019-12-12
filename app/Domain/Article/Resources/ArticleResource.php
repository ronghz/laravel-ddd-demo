<?php

namespace App\Domain\Article\Resources;

use App\Domain\Article\Supports\Enums\ArticleStatusEnum;
use Ronghz\LaravelDdd\Framework\Base\DddResource;

class ArticleResource extends DddResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'status_text' => ArticleStatusEnum::getText($this->status),
            'category_name' => $this->category ? $this->category->name : '',
            'category_full_name' => $this->category ? $this->category->parent->name . '/' . $this->category->name : '',
        ];
    }
}
