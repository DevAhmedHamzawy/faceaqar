<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class SpaceFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            if(request()->ad_sort_id == 1){
                return $builder->whereHas('localEstate', function($q) use ($value){
                    $q->WhereBetween('estate_space' , explode(" - ", $value));
                });
            }elseif(request()->ad_sort_id == 5){
                return $builder->whereHas('requestEstate', function($q) use ($value){
                    $q->WhereBetween('estate_space' , explode(" - ", $value));
                });
            }else{
                return $builder->whereHas('auctionEstate', function($q) use ($value){
                    $q->WhereBetween('estate_space' , explode(" - ", $value));
                });
            }
        }
    }
}