<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\AbstractScope;
use Illuminate\Database\Query\Builder;

class OrderBy extends AbstractScope
{
    /** @var string */
    protected $column;

    /** @var string */
    protected $direction;

    public function __construct (string $column, string $direction)
    {
        $this->column = $column;
        $this->direction = $direction;
    }

    public function apply (Builder $query): Builder
    {
        return $query->orderBy($this->column, $this->direction);
    }
}
