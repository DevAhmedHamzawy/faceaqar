<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FloorTanksSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('floor_tanks_sort' , $value);
        }
    }
}