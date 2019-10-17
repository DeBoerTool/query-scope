<?php

namespace Dbt\Query\Builders;

use Dbt\Query\Builders\Wildcards\Both;
use Dbt\Query\Interfaces\BuilderInterface;
use Dbt\Query\Interfaces\ScopeInterface;
use Dbt\Query\Interfaces\WildcardInterface as Wildcard;
use Dbt\Query\Scopes\OrWhere;
use Dbt\Query\Scopes\WhereGroup;

class SearchBuilder implements BuilderInterface
{
    /** @var string */
    private $term;

    /** @var array */
    private $columns;

    public function __construct (string $term, array $columns, Wildcard $wrapper = null)
    {
        $wrapper = $wrapper ?? new Both();

        $this->term = $wrapper->wrap($term);
        $this->columns = $columns;
    }

    public function scope (): ScopeInterface
    {
        $group = new WhereGroup();

        foreach ($this->columns as $column) {
            $group->push(
                new OrWhere($column, 'like', $this->term)
            );
        }

        return $group;
    }
}
