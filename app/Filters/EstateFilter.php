<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class EstateFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('name' , $value);
    }
}