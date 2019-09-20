<?php

namespace Dbt\Query\Scopes;

class OrderByAsc extends OrderBy
{
    public function __construct (string $column)
    {
        parent::__construct($column, 'asc');
    }
}
