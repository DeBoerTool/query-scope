<?php

namespace Dbt\Query\Builders\Wildcards;

use Dbt\Query\Interfaces\WildcardInterface;

class Both implements WildcardInterface
{
    public function wrap (string $term): string
    {
        return sprintf('%%%s%%', $term);
    }
}
