<?php 

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class SchemaNumberFilter implements Filter
{
    public function apply(Builder $builder, $value)
    {
        if($value !== null){
            return $builder->where('schema_number' , $value);
        }
    }
}