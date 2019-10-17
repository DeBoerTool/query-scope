<?php

namespace Dbt\Query\Builders\Wildcards;

use Dbt\Query\Interfaces\WildcardInterface;

class Left implements WildcardInterface
{
    public function wrap (string $term): string
    {
        return sprintf('%%%s', $term);
    }
}
