<?php

namespace App\Http\Controllers;

use App\Estate;
use App\EstateImage;
use Illuminate\Http\Request;

class EstateImageController extends Controller
{
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EstateImage  $estateImage
     * @return \Illuminate\Http\Response
     */
    public function show(EstateImage $estateImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EstateImage  $estateImage
     * @return \Illuminate\Http\Response
     */
    public function edit(EstateImage $estateImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EstateImage  $estateImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstateImage $estateImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EstateImage  $estateImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estate $estate, $index)
    {
        $estateImages = json_decode($estate->images->img);
        unset($estateImages[$index]);
        $estate->images->img = json_encode($estateImages);
        //$estate->images = $estateImages;
        dd($estate->images->save());
    }
}
