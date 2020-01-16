<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class AgeFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('age' , $value);
        }
    }
}