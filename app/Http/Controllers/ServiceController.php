<?php

namespace App\Http\Controllers;

use App\Helpers\ApiUtil;
use App\Helpers\Utils;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return ApiUtil::success(data: Utils::resource_pagination('services', '\App\Http\Resources\ServiceCollection', Service::paginate(5)));
    }
}
