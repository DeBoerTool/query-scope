<?php

namespace Dbt\Query\Scopes;

use Illuminate\Database\Query\Builder;

class OrWhere extends Where
{
    public function apply (Builder $query): Builder
    {
        return $query->orWhere($this->column, $this->operator, $this->value);
    }
}
