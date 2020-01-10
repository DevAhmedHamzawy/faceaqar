<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PriceSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('price_sort_id' , $value);
    }
}