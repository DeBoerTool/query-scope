<?php

namespace Dbt\Query\Abstracts;

use Dbt\Query\Interfaces\WhereInterface;
use Illuminate\Database\Query\Builder;

abstract class WhereAbstract implements WhereInterface
{
    public function __invoke (Builder $query): Builder
    {
        return $this->apply($query);
    }
}
