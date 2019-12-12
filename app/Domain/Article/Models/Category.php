<?php

namespace App\Domain\Article\Models;

use Ronghz\LaravelDdd\Framework\Base\DddModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends DddModel
{
    use SoftDeletes;

    protected $table = 'article_categories';

    protected $fillable = [
        'id',
		'name',
		'parent_id',
		'created_at',
		'updated_at',
        'deleted_at'
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
