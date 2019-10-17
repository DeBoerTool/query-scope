<?php

namespace Dbt\Query\Interfaces;

use Illuminate\Database\Query\Builder;

interface ScopeInterface
{
    public function apply (Builder $query): Builder;
    public function __invoke (Builder $query): Builder;
}
