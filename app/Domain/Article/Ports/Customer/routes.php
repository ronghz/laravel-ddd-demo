<?php
Route::group(['prefix' => 'customer/article', 'namespace' => 'App\Domain\Article\Ports\Customer\Controllers'], function ($router) {
    $router->get('/article/router', 'ArticleController@router');
});


