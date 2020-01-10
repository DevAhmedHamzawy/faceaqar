<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class UnitsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('units_number' , $value);
    }
}