<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class KitchensNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('kitchens_number' , $value);
    }
}