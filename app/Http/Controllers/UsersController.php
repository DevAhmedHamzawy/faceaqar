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

  
    public function show(User $user)
    {
        $user_name = $user->name;
        $images = json_decode($user->images->img);
        $storage_images = [];
        foreach($images as $image){
            $image = asset("storage/estates/${user_name}/${image}");
            array_push($storage_images, $image);
        }

        //dd($storage_images);
        $user->images = $storage_images;

       if($user->hasRole('estate_office')){ views($user)->record(); return view('main.users.estate_office.show', [ 'user' => $user, 'views' => views($user)->unique()->count()]); } else { dd($user);  }
    }

    
    public function edit()
    {
        if(auth()->user()->hasRole('estate_office')){ return view('main.users.estate_office.edit' , ['user' => auth()->user(), 'areas' => Area::getMainAreas()]); } else { return view('main.users.user.edit' , ['user' => auth()->user()]);  }
    }

    public function update(Request $request, User $user)
    {

        if($request->has('national_identity_img')){ $request->merge(['national_identity_img' => UploadFiles::upload_national_image($request->national_img, auth()->user()->name, 'users/'.auth()->user()->name.'/national_image') ]);}

        if($request->has('commercial_register_img')){ $request->merge(['commercial_register_img' =>UploadFiles::upload_commercial_image($request->commercial_img, auth()->user()->name, 'users/'.auth()->user()->name.'/commercial_image')]);}

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
