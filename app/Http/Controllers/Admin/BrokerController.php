<?php

namespace App\Http\Controllers\Admin;

use App\Broker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $brokers = Broker::all();
            
            foreach ($brokers as $broker) {
                $broker->visible == 0 ? $broker->visible_status = 'غير مفعل' : $broker->visible_status = 'مفعل';
            }
           
            return Datatables::of($brokers)->addIndexColumn()
            ->addColumn('activate', function($row){
    
                if($row->visible == 0){
                    $btn = '<a href="'.route("brokers.activate", $row->id).'" class="btn btn-warning">تفعيل</a>';
                }else{
                    $btn = '<a href="'.route("brokers.deactivate", $row->id).'" class="btn btn-warning">إلغاء التفعيل</a>';
                }
    
                return $btn;
            })
            ->addColumn('delete', function($row){
    
                $btn = '<a href="'.route("broker.delete", [$row->id]).'"  class="btn btn-danger btn-sm">حذف</a>';
    
                return $btn;
            })
            ->rawColumns(['activate','delete'])
            ->make(true);
    
        }
        return view('admin.brokers.index');
    }

    public function activate(Broker $broker)
    {
        $broker->update(['visible' => 1]);
        return redirect()->back();
    }

    public function deactivate(Broker $broker)
    {
        $broker->update(['visible' => 0]);
        return redirect()->back();
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Broker $broker)
    {
        $broker->delete();
        return redirect()->back();
    }
}
