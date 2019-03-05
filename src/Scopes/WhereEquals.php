<?php

namespace Dbt\Query\Scopes;

class WhereEquals extends Where
{
    /**
     * @param string $column
     * @param string|int|float $value
     */
    public function __construct (string $column, $value)
    {
        parent::__construct($column, '=', $value);
    }
}
