<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class StreetsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('streets_number' , $value);
    }
}