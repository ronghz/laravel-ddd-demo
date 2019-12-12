<?php

namespace App\Domain\User\Models;

use Ronghz\LaravelDdd\Framework\Base\DddModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends DddModel
{
    use SoftDeletes;

    protected $table = '';

    protected $fillable = [
        
    ];
}
