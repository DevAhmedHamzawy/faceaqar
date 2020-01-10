<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class BathroomsNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('bathrooms_number' , $value);
    }
}