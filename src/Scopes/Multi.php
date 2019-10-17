<?php

namespace Dbt\Query\Scopes;

use Dbt\Query\Abstracts\ScopeAbstract;
use Dbt\Query\Interfaces\ScopeInterface;
use Illuminate\Database\Query\Builder;

/**
 * @decorates \Dbt\Query\AbstractScope
 */
class Multi extends ScopeAbstract implements ScopeInterface
{
    /** @var ScopeInterface[] */
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

    public function add (ScopeInterface $scope): void
    {
        $this->scopes[] = $scope;
    }

    public function push (ScopeInterface ...$scopes): void
    {
        array_push($this->scopes, ...$scopes);
    }
}
