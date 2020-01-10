<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class AdSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('ad_sort_id' , $value);
    }
}