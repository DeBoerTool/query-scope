<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\Scope;

class WhereEquals extends Where implements Scope
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
