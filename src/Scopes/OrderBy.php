<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\Abstracts\ScopeAbstract;
use Illuminate\Database\Query\Builder;

class OrderBy extends ScopeAbstract
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
