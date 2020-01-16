<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class SchemaNameFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('schema_name' , $value);
        }
    }
}