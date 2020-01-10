<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class LiftsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('lifts_number' , $value);
    }
}