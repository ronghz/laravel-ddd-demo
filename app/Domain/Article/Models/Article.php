<?php

namespace App\Domain\Article\Models;

use Ronghz\LaravelDdd\Framework\Base\DddModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends DddModel
{
    use SoftDeletes;

    protected $table = 'article_articles';

    protected $fillable = [
        'id',
		'title',
		'content',
		'status',
		'created_at',
		'updated_at',
        'deleted_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
