<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class RoleFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
           return $builder->whereHas('roles', function($q) use ($value){
                    $q->where('name' , $value);
                });
        }
    }
}