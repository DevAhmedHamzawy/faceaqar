<?php

namespace App\Http\Controllers;

use App\Area;
use App\Traits\UploadFiles;
use App\User;
use App\UserImage;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use UploadFiles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       views($user)->record();
       if($user->hasRole('estate_office')){ return view('main.users.estate_office.show', [ 'user' => $user, 'views' => views($user)->unique()->count()]); } else { dd($user);  }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(auth()->user()->hasRole('estate_office')){ return view('main.users.estate_office.edit' , ['user' => auth()->user(), 'areas' => Area::getMainAreas()]); } else { return view('main.users.user.edit' , ['user' => auth()->user()]);  }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        
        //dd($request->all());

        if($request->has('national_identity_img')){
        $request->merge(['national_identity_img' =>       
          UploadFiles::upload_national_image($request->national_img, auth()->user()->name, 'users/'.auth()->user()->name.'/national_image')
        ]);
        }

        if($request->has('commercial_register_img')){
        $request->merge(['commercial_register_img' =>
        UploadFiles::upload_commercial_image($request->commercial_img, auth()->user()->name, 'users/'.auth()->user()->name.'/commercial_image')]);
        }

        auth()->user()->profile()->update($request->except('_token', '_method', 'namefield6', 'namefield5' , 'name' , 'email', 'choice-type', 'national_img', 'commercial_img','userimages', 'latlng', 'g-recaptcha-response'));
        auth()->user()->update($request->only('email'));


        
        
        
        if($request->hasfile('userimages'))
        {
            $user_name = auth()->user()->name;

            foreach($request->file('userimages') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->storePubliclyAs("public/users/${user_name}", $name);  
                $data[] = $name;  
            }

            $userimage= new UserImage;
            $userimage->img=json_encode($data);
            $userimage->user_id=auth()->user()->id;
            //dd($userimage);
            $userimage->save();
        }

       

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
