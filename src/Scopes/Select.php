<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\Abstracts\ScopeAbstract;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Query\Expression;

class Select extends ScopeAbstract
{
    /** @var string[] */
    private $columns = [];

    public function __construct (string ...$columns)
    {
        foreach ($columns as $column) {
            $this->columns[] = new Expression($column);
        }
    }

    public function apply (Builder $query): Builder
    {
        return $query->select($this->columns);
    }
}
