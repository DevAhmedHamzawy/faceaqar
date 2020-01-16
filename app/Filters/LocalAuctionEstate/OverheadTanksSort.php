<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class OverheadTanksSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('overhead_tanks_sort' , $value);
        }
    }
}