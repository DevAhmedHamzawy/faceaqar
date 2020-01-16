<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class WaterNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('water_network' , $value);
        }
    }
}