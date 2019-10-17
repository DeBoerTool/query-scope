<?php

namespace Dbt\Query\Abstracts;

use Dbt\Query\Interfaces\ScopeInterface;
use Illuminate\Database\Query\Builder;

abstract class ScopeAbstract implements ScopeInterface
{
    public function __invoke (Builder $query): Builder
    {
        return $this->apply($query);
    }
}
