<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class GasNetworkFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('gas_network' , $value);
    }
}