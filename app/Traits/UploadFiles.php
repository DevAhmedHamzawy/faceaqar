<?php

namespace App\Traits;

Trait UploadFiles
{
    public static function upload_image($image, $name, $dirname){
        $fileName = str_slug($name) . '.' . $image->getClientOriginalExtension();
        $image->storePubliclyAs('public/'.$dirname.'/', $fileName);
    
        return $fileName;
    }       
}