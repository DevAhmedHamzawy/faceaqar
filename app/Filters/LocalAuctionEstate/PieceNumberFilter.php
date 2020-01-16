<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class PieceNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('piece_number' , $value);
        }
    }
}