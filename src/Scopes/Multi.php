<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\AbstractScope;
use Dbt\Query\Scope;
use Illuminate\Database\Query\Builder;

/**
 * @decorates \Dbt\Query\AbstractScope
 */
class Multi extends AbstractScope implements Scope
{
    /** @var Scope[] */
    private $scopes = [];

    /**
     * Constructor.
     * @param array $scopes
     */
    public function __construct (array $scopes)
    {
        $this->addMany($scopes);
    }

    public function apply (Builder $query): Builder
    {
        foreach ($this->scopes as $scope) {
            $query = $scope->apply($query);
        }

        return $query;
    }

    public function addMany (array $scopes): void
    {
        foreach ($scopes as $scope) {
            $this->add($scope);
        }
    }

    public function add (Scope $scope): void
    {
        $this->scopes[] = $scope;
    }
}
