<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class OverheadTanksSortFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('localEstate', function($q) use ($value){
                $q->where('overhead_tanks_sort' , $value);
            })->whereHas('auctionEstate', function($q) use ($value){
                $q->where('overhead_tanks_sort' , $value);
            });
        }
    }
}