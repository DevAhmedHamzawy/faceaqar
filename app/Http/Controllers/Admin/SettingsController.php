<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use App\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($sort = null, Settings $setting)
    {
        $settings = Settings::findOrFail(1);

        switch ($sort) {
            case 'main':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'about':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break; 
            case 'terms':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'services':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'branches':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'financial_fees':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'payment_methods':
                return view('admin.settings.edit', ['settings' => $settings, 'sort' => $sort]);
                break;
            case 'index':
                return view('admin.settings.index', ['pages' => Page::whereNull('Parent_id')->get()]);
                break;       
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        //dd($request->all());
        //$settings->update($request->all());
        Settings::whereId(1)->update($request->except('_token','_method','1','0'));
        return redirect()->back();
    }
}
