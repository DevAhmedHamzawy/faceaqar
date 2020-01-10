<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class NeighborhoodFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('neighborhood' , 'like' , "%$value%");
    }
}