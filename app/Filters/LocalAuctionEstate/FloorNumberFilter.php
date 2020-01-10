<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FloorNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('floor_number' , $value);
    }
}