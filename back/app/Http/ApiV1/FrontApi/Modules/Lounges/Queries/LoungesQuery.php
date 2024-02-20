<?php

namespace App\Http\ApiV1\FrontApi\Modules\Lounges\Queries;

use App\Domain\Lounges\Models\Lounge;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;

class LoungesQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(Lounge::query());

        $this->allowedIncludes([
            'filial.city',
        ]);

        $this->allowedFilters([
            AllowedFilter::exact('city', 'filial.city.name'),
            AllowedFilter::callback('is_active', fn($query, $value) => $query->where('is_active', $value)),
        ]);

        $this->allowedSorts([
            AllowedSort::field('filial', 'filial_id'),
        ]);
    }
}
