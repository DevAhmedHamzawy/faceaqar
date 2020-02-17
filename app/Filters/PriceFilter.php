<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PriceFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('localEstate', function($q) use ($value){
                $q->whereBetween('price' , explode(" - ", $value));
            })->whereHas('auctionEstate', function($q) use ($value){
                $q->whereBetween('price' , explode(" - ", $value));
            });
        }
    }
}