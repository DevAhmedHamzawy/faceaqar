<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class AgeFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('age' , $value);
    }
}