<?php

namespace App\Domain\Article\Ports\Customer\Request;


use Ronghz\LaravelDdd\Framework\Base\DddRequest;

class ArticleGetShowRequest extends DddRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'required'
        ];
    }
}
