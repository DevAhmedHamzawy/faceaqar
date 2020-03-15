<?php

namespace App;

use App\Filters\BaseFilter;
use App\Traits\Estate\Attributes;
use App\Traits\Estate\ChartsQueries;
use App\Traits\Estate\Queries;
use App\Traits\Estate\Relations;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use Illuminate\Support\Facades\DB;

class Estate extends Model implements ViewableContract
{
    use Viewable, Attributes, Queries, ChartsQueries, Relations;

    protected $guarded = [];

    protected $with = ['category','images','likes','dislikes'];

    public function getRouteKeyName()
    {   
        // instead we should use slug
        return 'name';
    }

    // this is a recommended way to declare event handlers
    public static function boot() {
        parent::boot();

        static::deleting(function($estate) { 
             $estate->localEstate()->delete();
             $estate->requestEstate()->delete();
             $estate->auctionEstate()->delete();
             $estate->images()->delete();
             $estate->likes()->delete();
             $estate->dislikes()->delete();
             $estate->reports()->delete();
             $estate->advertiser()->delete();
        });
    }

    public static function scopeFilter(Builder $builder, $filters)
    {
        return (new BaseFilter(request()))->apply($builder, $filters);
    }    
}