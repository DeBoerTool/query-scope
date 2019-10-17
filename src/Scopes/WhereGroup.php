<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\Abstracts\ScopeAbstract;
use Dbt\Query\Interfaces\WhereInterface;
use Illuminate\Database\Query\Builder;

class WhereGroup extends ScopeAbstract
{
    /** @var \Dbt\Query\Scopes\Multi */
    private $wheres;

    public function __construct (WhereInterface ...$wheres)
    {
        $this->wheres = new Multi($wheres);
    }

    public function apply (Builder $query): Builder
    {
        return $query->where(function (Builder $nested) {
            $this->wheres->apply($nested);
        });
    }
}
