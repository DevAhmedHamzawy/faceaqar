<?php

namespace App;

use App\Filters\BaseFilter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Viewable;
use CyrildeWit\EloquentViewable\Contracts\Viewable as ViewableContract;
use Illuminate\Support\Facades\DB;

class Estate extends Model implements ViewableContract
{
    use Viewable;

    protected $guarded = [];

    protected $with = ['category','images','likes','dislikes'];

    public function getRouteKeyName()
    {   
        // instead we should use slug
        return 'name';
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function localEstate()
    {
        return $this->hasOne('App\LocalEstate');
    }

    public function requestEstate()
    {
        return $this->hasOne('App\RequestEstate');
    }

    public function auctionEstate()
    {
        return $this->hasOne('App\AuctionEstate');
    }

    public function images()
    {
        return $this->hasOne('App\EstateImage', 'estate_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(1);
    }

    public function dislikes()
    {
        return $this->hasMany('App\Like', 'estate_id')->whereLike(-1);
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function advertiser()
    {
        return $this->hasOne('App\Advertiser');
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

    public function getcreateAtAttribute()
    {
        return Carbon::parse($this->created_at)->translatedFormat('d M Y');
    }

    public function getUpdateAtAttribute()
    {
        return Carbon::parse($this->updated_at)->translatedFormat('d M Y');
    }

    public function getAgoAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getFavouriteAttribute()
    {
        if(!auth()->user()) { return false; }
        return auth()->user()->favourites()->whereEstateId($this->id)->exists();
    }

    

    public static function checkAdSort($adSort)
    {
        return DB::table('ad_sort')->whereName($adSort)->orWhere('id', $adSort)->doesntExist() ? abort(404) : DB::table('ad_sort')->whereName($adSort)->orWhere('id', $adSort)->first();
    }

   


    public static function getAllSorts()
    {
        return DB::table('sort')->get();
    }

    public static function getSort($id)
    {
        return DB::table('sort')->whereId($id)->pluck('name');
    }

    public static function getAllOffers()
    {
        return DB::table('offer')->get();
    }

    public static function getOffer($id)
    {
        return DB::table('offer')->whereId($id)->pluck('name');
    }

    public static function getAllDestinations()
    {
        return DB::table('destination')->get();
    }

    public static function getAllPriceSorts()
    {
        return DB::table('price_sort')->get();
    }

    public static function getAllPaymentSorts()
    {
        return DB::table('payment_sort')->get();
    }

    public static function getMainArea($id)
    {
        $area = Area::where('id', $id)->first();
        $mainArea = Area::where('id', $area->parent_id)->first();
        return $mainArea->name;
    }

    public static function scopeFilter(Builder $builder, $filters)
    {
        // old
        /*foreach($filters as $key => $value){
            $builder = $builder->where($key, $value);
        }

        return $builder;*/
        return (new BaseFilter(request()))->apply($builder, $filters);
    }

    /*public static function getEstatesAdmin//()
    //{
        self::with(['likes' => function($query){
            $query->groupBy('estate_id');
        }])->with(['dislikes' => function($query){
            $query->groupBy('estate_id');
        }])->with(['reports' => function($query){
            $query->groupBy('estate_id');
        }])->get();
    }*/


    
}