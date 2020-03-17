<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactFormRequest;
use App\setting;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    use UploadFiles;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {
        $request->merge(['file' => UploadFiles::upload_image($request->file_data, $request->name, 'contacts'), 'mobile' => 0, 'area_id' => 0, 'service_id' => 0]);
        Contact::create($request->except('file_data'));
        return 'ok';
    }

    public function show()
    {
        return view('main.contact');
    }

}
