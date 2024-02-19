<?php

namespace App\Http\ApiV1\FrontApi\Modules\Holidays\Controllers;

use App\Http\ApiV1\FrontApi\Modules\Holidays\Queries\PackagesQuery;
use App\Http\ApiV1\FrontApi\Modules\Holidays\Resources\PackagesResource;
use App\Http\ApiV1\FrontApi\Support\Pagination\PageBuilderFactory;

class PackagesController
{
    public function get(int $id, PackagesQuery $query): PackagesResource
    {
        return new PackagesResource($query->findOrFail($id));
    }

    public function search(PageBuilderFactory $pageBuilderFactory, PackagesQuery $query): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return PackagesResource::collectPage(
            $pageBuilderFactory->fromQuery($query)->build()
        );
    }
}
