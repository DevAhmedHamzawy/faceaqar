<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.lawyers.index', ['lawyers' => User::withRole('lawyer')->orderByDesc('id')->paginate(6)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.lawyers.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['code' => rand(10,999999)]);

        $latlngArray = explode(',' , $request->input('latlng'));
        
        $request->merge(['lat' => $latlngArray[0] , 'lng' => $latlngArray[1]]);

        $user = User::create($request->only('name','email','password'));
        $user->profile()->create($request->except('name','password','image','latlng'));

        $user->attachRole(Role::whereName('lawyer')->first()->id);
        return redirect()->route('lawyers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $lawyer)
    {
        return view('admin.users.lawyers.edit', ['lawyer' => $lawyer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $lawyer)
    {
        $latlngArray = explode(',' , $request->input('latlng'));
        
        $request->merge(['lat' => $latlngArray[0] , 'lng' => $latlngArray[1]]);

        $lawyer->update($request->only('name','email','password'));
        $lawyer->profile()->update($request->except('_token','_method','name','password','image','latlng'));

        return redirect()->route('lawyers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return redirect()->back()->withSuccess('تم الحذف بنجاح');
    }
}
