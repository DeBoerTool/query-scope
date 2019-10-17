<?php

namespace Dbt\Query\Interfaces;

interface WildcardInterface
{
    public function wrap (string $term): string;
}
