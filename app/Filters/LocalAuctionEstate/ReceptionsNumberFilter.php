<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ReceptionsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('receptions_number' , $value);
        }
    }
}