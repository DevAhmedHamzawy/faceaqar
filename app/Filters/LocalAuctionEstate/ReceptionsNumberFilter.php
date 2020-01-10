<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ReceptionsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('receptions_number' , $value);
    }
}