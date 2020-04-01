<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class UnitNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            if(request()->ad_sort_id == 1){
                return $builder->whereHas('localEstate', function($q) use ($value){
                    $q->where('unit_number' , $value);
                });
            }else{
                return $builder->whereHas('auctionEstate', function($q) use ($value){
                    $q->where('unit_number' , $value);
                });
            }
        }
    }
}