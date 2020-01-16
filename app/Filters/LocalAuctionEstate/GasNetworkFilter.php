<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class GasNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('gas_network' , $value);
        }
    }
}