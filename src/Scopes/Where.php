<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\AbstractScope;
use Dbt\Query\Scope;
use Illuminate\Database\Query\Builder;

class Where extends AbstractScope implements Scope
{
    /** @var string */
    protected $column;

    /** @var string */
    protected $operator;

    /** @var string|int|float */
    protected $value;

    /**
     * @param string $column
     * @param string $operator
     * @param string|int|float $value
     */
    public function __construct (string $column, string $operator, $value)
    {
        $this->column = $column;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function apply (Builder $query): Builder
    {
        return $query->where($this->column, $this->operator, $this->value);
    }

    /** @return string|int|float */
    public function value ()
    {
        return $this->value;
    }
}
