<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class RoomsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('rooms_number' , $value);
        }
    }
}