<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class StoresNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('stores_numbers' , $value);
        }
    }
}