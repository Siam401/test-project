<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiUtil;
use App\Helpers\Utils;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return ApiUtil::success(data: Utils::resource_pagination('services', '\App\Http\Resources\ServiceCollection', Service::paginate(5)));
    }
}
