<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class NeighborhoodFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            if(request()->ad_sort_id == 7){
                return $builder->whereHas('profile', function($q) use ($value){
                    $q->where('neighborhood' , 'like' , "%$value%");
                });
            }else{
                return $builder->where('neighborhood' , 'like' , "%$value%");
            }
        }        
    }
}