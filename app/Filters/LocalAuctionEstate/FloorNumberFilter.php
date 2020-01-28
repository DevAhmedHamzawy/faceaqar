<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class FloorNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('localEstate', function($q) use ($value){
                $q->whereBetween('floor_number' , [0, $value+10]);
            })->whereHas('auctionEstate', function($q) use ($value){
                $q->whereBetween('floor_number' , [0, $value+10]);
            });
        }
    }
}