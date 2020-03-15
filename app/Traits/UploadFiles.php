<?php

namespace App\Traits;

Trait UploadFiles
{
    public static function upload_image($image, $name, $dirname){
        $fileName = str_slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storePubliclyAs('public/'.$dirname.'/', $fileName);
    
        return $fileName;
    }       


    public static function upload_national_image($image, $name, $dirname){
        $fileName = str_slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storePubliclyAs('public/'.$dirname.'/', $fileName);
    
        return $fileName;
    }      


    public static function upload_commercial_image($image, $name, $dirname){
        $fileName = str_slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storePubliclyAs('public/'.$dirname.'/', $fileName);
    
        return $fileName;
    }       

    public static function upload_icon_image($image, $name, $dirname){
        $fileName = str_slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storePubliclyAs('public/'.$dirname.'/', $fileName);
    
        return $fileName;
    }       
}