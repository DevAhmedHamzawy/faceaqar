<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class DeliveryMethodFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('delivery_method' , $value);
    }
}