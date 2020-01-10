<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PieceNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('piece_number' , $value);
    }
}