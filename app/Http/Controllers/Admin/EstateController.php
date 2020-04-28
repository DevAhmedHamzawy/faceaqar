<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Estate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
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

               $btn = '<a href="'.route("estates.show", [$row->ad_sort_id, $row->name]).'" target="_blank" class="edit btn btn-primary btn-sm">عرض</a>';

                return $btn;
        })
        ->rawColumns(['action'])
        ->make(true);

        }

        return view('admin.estates.index');
    }

    public function addingPremiumEstates(Request $request)
    {
        if ($request->ajax()) {

            $estates = Estate::whereNotNull('premium_id')->whereNotNull('duration_id')->get();
    
            foreach($estates as $estate){
                $estate->premium = Estate::getPremium($estate->premium_id)->name ?? 'لا يوجد';
                $estate->premiumNumber = Estate::getPremium($estate->premium_id)->number ?? 0;
                $estate->premiumRemains = Carbon::now()->diffInDays($estate->updated_at->addDays($estate->premiumNumber), false) < 0 ? 'إنتهى منذ'.abs(Carbon::now()->diffInDays($estate->updated_at->addDays($estate->premiumNumber), false)).'يوم' : Carbon::now()->diffInDays($estate->updated_at->addDays($estate->premiumNumber), false).'يوم';
                $estate->duration = Estate::getDuration($estate->duration_id)->name ?? 'لا يوجد';
                $estate->durationNumber = Estate::getDuration($estate->duration_id)->number ?? 0;
                $estate->durationRemains = Carbon::now()->diffInDays($estate->updated_at->addDays($estate->durationNumber), false) < 0 ? 'إنتهى منذ'.abs(Carbon::now()->diffInDays($estate->updated_at->addDays($estate->durationNumber), false)).'يوم' : Carbon::now()->diffInDays($estate->updated_at->addDays($estate->durationNumber), false).'يوم';
                if($estate->premium_approval == 1) { $estate->approval = 'مفعل'; }else{ $estate->approval = 'غير مفعل';  }
            }

            return Datatables::of($estates)->addIndexColumn()
            ->addColumn('edit', function($row){
                $btn = '<a href="'.route("estates.show", [$row->ad_sort_id, $row->name]).'" target="_blank" class="edit btn btn-primary btn-sm">عرض</a>';
                return $btn;
            })
            ->addColumn('paymentshow', function($row){
                if($row->ticket){
                    $btn = '<a href="'.route("tickets.show", [$row->ticket->id,$row->name]).'" target="_blank"  class="btn btn-warning btn-sm">عرض التذكرة</a>';
                }else{
                    $btn = 'لم يتم إضافة تذكرة';
                }
                return $btn;
            })
            ->addColumn('destroy', function($row){
                $btn = '<a href="'.route("estates.destroy", [$row->name]).'"  class="btn btn-danger btn-sm">حذف</a>';
                return $btn;
            })
            ->rawColumns(['edit','paymentshow','destroy'])
            ->make(true);
    
            }
    
            return view('admin.estates.index2');
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
