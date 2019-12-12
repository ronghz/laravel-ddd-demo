<?php

namespace App\Domain\Article\Ports\Customer\Controllers;

use App\Domain\Article\Ports\Customer\Request\ArticleGetShowRequest;
use App\Supports\BaseController\CustomerController;
use App\Domain\Article\Services\ArticleService as DomainService;
use App\Domain\Article\Ports\Customer\Services\ArticleService as AppService;
use Illuminate\Http\Request;

class ArticleController extends CustomerController
{
    /** @var AppService */
    protected $appService = null;

    /** @var DomainService */
    protected $domainService = null;

    public function getRecommended()
    {
        return $this->success($this->appService->findPublishedOrderByRecommend());
    }

    public function getShow(ArticleGetShowRequest $request)
    {
        return $this->success($this->domainService->findById($request->get('id', 0)));
    }

    public function getByParam(Request $request, $id)
    {
        return $this->success($this->domainService->findById($id));
    }

    public function router(Request $request)
    {
        return 'self define route';
    }
}
