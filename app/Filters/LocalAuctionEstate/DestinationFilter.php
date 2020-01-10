<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class DestinationFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('destination_id' , $value);
    }
}