<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BuildingDesignFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('building_design' , $value);
    }
}