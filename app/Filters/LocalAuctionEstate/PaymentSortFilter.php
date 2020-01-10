<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PaymentSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('payment_sort_id' , $value);
    }
}