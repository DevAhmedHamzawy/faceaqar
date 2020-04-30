<?php

namespace App\Http\Controllers\Admin;

use App\Estate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

        $estates = Estate::withCount(['likes', 'favourites', 'dislikes', 'reports'])->with('user')->orderByDesc('reports_count')->get();
        
        return Datatables::of($estates)->addIndexColumn()
        ->addColumn('show', function($row){

                $btn = '<a href="'.route("estates.show", [$row->ad_sort_id, $row->name]).'" target="_blank" class="edit btn btn-primary btn-sm">عرض</a>';

                return $btn;
        })
        ->addColumn('blacklist', function($row){

            if($row->blacklist == 0){
                $btn = '<a href="'.route("blacklist", [$row->id,'estate']).'"  class="btn btn-warning btn-sm">حظر</a>';
            }else{
                $btn = '<a href="'.route("unblacklist", [$row->id,'estate']).'"  class="btn btn-warning btn-sm">فك الحظر</a>';
            }

            return $btn;
        })
        ->addColumn('delete', function($row){

            $btn = '<a href="'.route("estates.delete", [$row->name]).'"  class="btn btn-danger btn-sm">حذف</a>';

            return $btn;
        })
        ->rawColumns(['show','blacklist','delete'])
        ->make(true);

        }

      

        return view('admin.reports.index');
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
