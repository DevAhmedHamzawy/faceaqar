<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class SortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('sort_id' , $value);
    }
}