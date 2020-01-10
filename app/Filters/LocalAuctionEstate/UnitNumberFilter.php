<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class UnitNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('unit_number' , $value);
    }
}