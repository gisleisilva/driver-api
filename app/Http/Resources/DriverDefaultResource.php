<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Collection;

class DriverDefaultResource extends JsonResource
{
    public function toArray(Request $request): Collection
    {
        return collect($this->resource);
    }
}
