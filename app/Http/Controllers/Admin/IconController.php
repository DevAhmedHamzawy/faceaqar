<?php

namespace App\Http\Controllers\Admin;

use App\Icon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\UploadFiles;

class IconController extends Controller
{
    use UploadFiles;
    
    public function index($place)
    {
        return view('admin.settings.icons.index', ['icons' => Icon::wherePlace($place)->get(), 'place' => $place]);
    }

    public function store(Request $request)
    {
        $icon = Icon::findOrFail($request->icon_id);
        
        $request->merge(['icon' => UploadFiles::upload_icon_image($request->file_data, $icon->name, 'icons')]);
        
        return $icon->update(['icon' => $request->icon]) ? response()->json($icon) : false;
    }
}
