<?php

namespace Dbt\Query\Scopes;

class OrderByDesc extends OrderBy
{
    public function __construct (string $column)
    {
        parent::__construct($column, 'desc');
    }
}
