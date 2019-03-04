<?php

namespace Dbt\Query;

use Illuminate\Database\Query\Builder;

interface Scope
{
    public function apply (Builder $query): Builder;
    public function __invoke (Builder $query): Builder;
}
