<?php

namespace Dbt\Query\Scopes;

class WhereLike extends Where
{
    /**
     * @param string $column
     * @param string|int|float $value
     */
    public function __construct (string $column, $value)
    {
        parent::__construct($column, 'like', $value);
    }
}
