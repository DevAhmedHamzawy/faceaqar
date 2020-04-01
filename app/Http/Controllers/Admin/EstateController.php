<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Estate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class EstateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

        $estates = Estate::all();

        foreach($estates as $estate){
            $estate->sortName = Estate::getSort($estate->sort_id);
            $estate->offerName = Estate::getOffer($estate->offer_id);
            $estate->views = views($estate)->unique()->count();
            $estate->areaName = Estate::getMainArea($estate->area_id);
            $estate->adSort = Estate::checkAdSort($estate->ad_sort_id);
            if($estate->category == null) {  $estate->category = new Category; $estate->category->name = 'لا يوجد';  }
        }

        return Datatables::of($estates)->addIndexColumn()
        ->addColumn('action', function($row){

               $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">عرض</a>';

                return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);

        }

        return view('admin.estates.index');
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
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function show(Estate $estate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function edit(Estate $estate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estate $estate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estate  $estate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estate $estate)
    {
        $estate->delete();
        return redirect()->back();
    }
}
