<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class SewerageNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('sewerage_network' , $value);
        }
    }
}