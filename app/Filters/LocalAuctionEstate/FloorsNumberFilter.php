<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FloorsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('floors_number' , $value);
    }
}