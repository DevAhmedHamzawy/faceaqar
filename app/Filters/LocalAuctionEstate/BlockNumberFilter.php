<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BlockNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('block_number' , $value);
    }
}