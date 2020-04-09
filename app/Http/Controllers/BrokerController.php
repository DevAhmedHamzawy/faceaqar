<?php

namespace App\Http\Controllers;

use App\Broker;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;

class BrokerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.brokers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $broker_ad_sort = ['photosel' => 'صور', 'textopt' => 'كتابة نصية', 'socialopt' => 'حسابات التواصل الاجتماعي', 'advcartopt' => 'الكروت الإعلانية الإلكترونية', 'mediaopt' => 'حجز صفحة اعلانية كاملة'];

        $request->merge(['broker_ad_sort' => $broker_ad_sort[$request->broker_ad_sort], 'user_id' => auth()->user()->id]);   

        switch ($request->broker_ad_sort) {
            case 'صور':
                
                $request->merge(['name' => 'imagebroker'.rand(0,3000)]);

                if($request->has('image')){
                    $request->merge(['file' => UploadFiles::upload_broker_image($request->image, $request->name, 'brokers')]);
                }

                
                Broker::create($request->only('user_id','area_id','name','broker_ad_sort','dimensions','color_sort','img_url','comment','duration_id','file'));


                break;
            
            case 'كتابة نصية':

                if($request->has('image')){
                    $request->merge(['file' => UploadFiles::upload_broker_image($request->image, $request->name, 'brokers')]);
                }
                
                $request->merge(['name' => 'كتابة نصية']);

                Broker::create($request->only('user_id','area_id','name','broker_ad_sort','description','color_sort','image'));


                break;

            case 'حسابات التواصل الاجتماعي':

            
                if($request->has('social_image')){
                    $request->merge(['file' => UploadFiles::upload_broker_image($request->social_image, $request->name, 'brokers')]);
                }

                $request->merge(['name' => 'حساب تواصل إجتماعى']);

                Broker::create($request->only('user_id','area_id','name','broker_ad_sort','account_name','account_sort','account_color_sort','account_url','description','file'));


                break;

            case 'الكروت الإعلانية الإلكترونية':

        
                if($request->has('e_ad_cards_image')){
                    $request->merge(['file' => UploadFiles::upload_broker_image($request->e_ad_cards_image, $request->name, 'brokers')]);
                }

                $request->merge(['name' => 'كارت إعلانى الكترونى']);

                Broker::create($request->only('user_id','area_id','name','broker_ad_sort','commercial_name','commercial_description','commercial_address','commercial_url','commercial_account_sort','commercial_account_url','youtube','commercial_comment','commercial_mobile','commercial_telephone','commercial_fax','commercial_email','commercial_image','duration_id'));


                break;

            
            case 'حجز صفحة اعلانية كاملة':

    
                /*if($request->has('commercial_file')){
                    $request->merge(['commercial_file' => UploadFiles::upload_broker_image($request->image, $request->name, 'brokers')]);
                }*/

                Broker::create($request->only('user_id','area_id','name','broker_ad_sort','page_widget','e_ad_page_color_sort','e_ad_page_url','e_ad_page_comment','duration_id'));


                break;
            
          
        }

      
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function show(Broker $broker)
    {
        return view('main.brokers.show', ['broker' => $broker]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Broker  $broker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Broker $broker)
    {
        //
    }
}
