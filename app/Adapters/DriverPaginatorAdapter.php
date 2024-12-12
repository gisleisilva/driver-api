<?php

namespace App\Adapters;

use App\Http\Resources\DriverDefaultResource;
use App\Repositories\DriverPaginationInterface;
use Illuminate\Http\Resources\Json\JsonResource;

class DriverPaginatorAdapter
{
    public static function toJson(DriverPaginationInterface $data): JsonResource
    {
        return DriverDefaultResource::collection($data->items())->additional([
            'meta' => [
                'total' => $data->total(),
                'current_page' => $data->currentPage()
            ]
        ]);
    }
}
