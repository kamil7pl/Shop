<?php

namespace App\QueryFilters;

use Cerbero\QueryFilters\QueryFilters;

/**
 * Filter records based on query parameters.
 *
 */
class ProductFilters extends QueryFilters
{
    public function name($pharse)
	{
		$this->query->where('name', 'like', '%'.$pharse.'%');
	}
}
