<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class AreaFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('area_id' , $value);
    }
}