<?php

namespace Dbt\Query;

use Illuminate\Database\Query\Builder;

abstract class AbstractScope implements Scope
{
    public function __invoke (Builder $query): Builder
    {
        return $this->apply($query);
    }
}
