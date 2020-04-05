<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class WaterNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            if(request()->ad_sort_id == 1){
                return $builder->whereHas('localEstate', function($q) use ($value){
                    $q->where('water_network' , $value);
                });
            }else{
                return $builder->whereHas('auctionEstate', function($q) use ($value){
                    $q->where('water_network' , $value);
                });
            }
        }
    }
}