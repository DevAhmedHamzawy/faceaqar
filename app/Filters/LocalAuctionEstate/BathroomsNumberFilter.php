<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BathroomsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('bathrooms_number' , $value);
        }
    }
}