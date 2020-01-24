<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PriceSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('price_sort_id' , $value);
        }
    }
}