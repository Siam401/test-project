<?php

namespace App\Helpers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class Utils
{
    public static function resource_pagination(string $resourceKey, string $resourceName, LengthAwarePaginator $paginatedModels)
    {
        return [
            $resourceKey => $resourceName::collection($paginatedModels),
            'links' => [

                'first' => $paginatedModels->url(1),
                'last' => $paginatedModels->url($paginatedModels->lastPage()),
                'prev' => $paginatedModels->previousPageUrl(),
                'next' => $paginatedModels->nextPageUrl(),
            ],
            'meta' => [
                'current_page' => $paginatedModels->currentPage(),
                'from' => 1,
                'last_page' => $paginatedModels->lastPage(),
                'total' => $paginatedModels->total(),
            ],
        ];
    }
}
