<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class CategoryFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        return $builder->where('category_id' , $value);
    }
}