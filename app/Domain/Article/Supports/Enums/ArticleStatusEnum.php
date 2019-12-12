<?php
namespace App\Domain\Article\Supports\Enums;

use Ronghz\LaravelDdd\Framework\Base\DddEnum;

class ArticleStatusEnum extends DddEnum
{
    const DELETED   = -1;
    const DRAFT     = 0;
    const PUBLISHED    = 1;

    public static $texts = [
        self::DELETED     => '已删除',
        self::DRAFT    => '草稿',
        self::PUBLISHED   => '已发布',
    ];
}
