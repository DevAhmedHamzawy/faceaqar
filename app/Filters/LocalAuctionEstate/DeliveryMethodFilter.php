<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class DeliveryMethodFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('localEstate', function($q) use ($value){
                $q->where('delivery_method' , $value);
            })->whereHas('auctionEstate', function($q) use ($value){
                $q->where('delivery_method' , $value);
            });
        }
    }
}