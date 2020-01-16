<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class LiftsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('lifts_number' , $value);
        }
    }
}