<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ElectricityNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('localEstate', function($q) use ($value){
                $q->where('electricity_network' , $value);
            })->whereHas('auctionEstate', function($q) use ($value){
                $q->where('electricity_network' , $value);
            });
        }
    }
}