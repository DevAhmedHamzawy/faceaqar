<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FloorTanksSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('floor_tanks_sort' , $value);
    }
}