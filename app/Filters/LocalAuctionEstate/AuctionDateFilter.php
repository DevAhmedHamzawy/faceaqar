<?php 

namespace App\Filters;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class AuctionDateFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->whereHas('auctionEstate', function($q) use ($value){
                $q->whereDay('date' ,  Carbon::parse($value)->format('d'));
                $q->whereMonth('date' ,  Carbon::parse($value)->format('m'));
                $q->whereYear('date' ,  Carbon::parse($value)->format('Y'));
            });
        }
    }
}