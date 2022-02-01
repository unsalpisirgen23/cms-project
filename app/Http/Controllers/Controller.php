<?php

namespace App\Http\Controllers;

use App\Repositories\UnitOfWork;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected UnitOfWork $unitOfWork;

    public function __construct()
    {
        $this->unitOfWork = new UnitOfWork();
    }

}
