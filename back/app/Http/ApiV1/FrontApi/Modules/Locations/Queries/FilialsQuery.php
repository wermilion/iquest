<?php

namespace App\Http\ApiV1\FrontApi\Modules\Locations\Queries;

use App\Domain\Locations\Models\Filial;
use Spatie\QueryBuilder\QueryBuilder;

class FilialsQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(Filial::query());

        $this->allowedIncludes([
            'city'
        ]);

        $this->allowedFilters([
            'city.name'
        ]);

        $this->defaultSort('id');
    }
}