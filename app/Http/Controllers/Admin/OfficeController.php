<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DataTables;

class OfficeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $offices = User::with(['roles' => function($q){
                $q->where('name', 'estate_office');
                $q->orWhere('name', 'estate_agency');
                $q->orWhere('name', 'estate_company');
                $q->orWhere('name', 'estate_auction_office');
                $q->orWhere('name', 'engineering_office');

            }])->withCount(['likes', 'favourites', 'dislikes', 'reports'])->orderByDesc('reports_count')->get();

            foreach ($offices as $office) {
                $office->views = views($office)->unique()->count();
            }

        return DataTables::of($offices)->addIndexColumn()
        ->addColumn('action', function($row){

               $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">عرض</a>';

                return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);

        }


        /*$offices = User::with(['roles' => function($q){
            $q->where('name', 'estate_office');
            $q->orWhere('name', 'estate_agency');
            $q->orWhere('name', 'estate_company');
            $q->orWhere('name', 'estate_auction_office');
            $q->orWhere('name', 'engineering_office');

        }])->withCount(['likes', 'favourites', 'dislikes', 'reports'])->orderByDesc('reports_count')->limit(5)->get();

        //dd($offices);
        
        foreach ($offices as $office) {
            dd($office->profile->code);
        }*/             


        return view('admin.offices.index');
    }

}
