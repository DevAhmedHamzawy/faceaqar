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
        ->addColumn('show', function($row){

                $btn = '<a href="'.route("profile", [$row->name]).'" target="_blank" class="edit btn btn-primary btn-sm">عرض</a>';

                return $btn;
        })
        ->addColumn('blacklist', function($row){

            if($row->blacklist == 0){
                $btn = '<a href="'.route("blacklist", [$row->id,'office']).'"  class="btn btn-warning btn-sm">حظر</a>';
            }else{
                $btn = '<a href="'.route("unblacklist", [$row->id,'office']).'"  class="btn btn-warning btn-sm">فك الحظر</a>';
            }

            return $btn;
        })
        ->addColumn('delete', function($row){

            $btn = '<a href="'.route("office.delete", [$row->name]).'"  class="btn btn-danger btn-sm">حذف</a>';

            return $btn;
        })
        ->rawColumns(['show','blacklist','delete'])
        ->make(true);

        }

        return view('admin.offices.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }

}
