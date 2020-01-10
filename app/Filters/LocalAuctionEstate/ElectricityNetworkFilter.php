<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ElectricityNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('electricity_network' , $value);
    }
}