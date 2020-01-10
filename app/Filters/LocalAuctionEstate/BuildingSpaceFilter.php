<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BuildingSpaceFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('building_space' , $value);
    }
}