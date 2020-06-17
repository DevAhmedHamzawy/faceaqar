<?php

namespace App\Http\Controllers;

use App\AdCardBroker;
use App\AdPageBroker;
use App\Broker;
use App\BrokerImage;
use App\ImageBroker;
use App\SocialAccountBroker;
use App\TextBroker;
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

        //dd($request->all());
        $broker_ad_sort = ['photosel' => 'صور', 'textopt' => 'كتابة نصية', 'socialopt' => 'حسابات التواصل الاجتماعي', 'advcartopt' => 'الكروت الإعلانية الإلكترونية', 'mediaopt' => 'حجز صفحة اعلانية كاملة'];

        $request->merge(['user_id' => auth()->user()->id]);   
        $broker = Broker::create($request->only('user_id','area_id','duration_id'));
        $request->merge(['broker_ad_sort' => $broker_ad_sort[$request->broker_ad_sort],'broker_id' => $broker->id]);

        switch ($request->broker_ad_sort) {
            case 'صور':
                
                $request->merge(['name' => 'imagebroker'.rand(0,3000)]);

                if($request->hasFile('image'))
                {
                    $broker_id = $broker->id;

                    foreach($request->file('image') as $image)
                    {
                        $name = $image->getClientOriginalName();
                        $image->storePubliclyAs("public/brokers/${broker_id}", $name);  
                        $data[] = $name;  
                    }

                    $brokerimage= new BrokerImage();
                    $brokerimage->img=json_encode($data);
                    $brokerimage->broker_id=$request->broker_id;
                    
                    $brokerimage->save();
                }

                
                $request->merge(['url' => $request->img_url, 'comment' => $request->img_comment]);

                
                ImageBroker::create($request->only('broker_id','dimensions','color_sort','url','comment'));


                break;
            
            case 'كتابة نصية':


                $request->merge(['comment' => $request->text_body]);

                TextBroker::create($request->only('broker_id','comment','color_sort'));


                break;

            case 'حسابات التواصل الاجتماعي':


                if($request->hasFile('account_image'))
                {
                    $broker_id = $broker->id;

                    foreach($request->file('account_image') as $image)
                    {
                        $name = $image->getClientOriginalName();
                        $image->storePubliclyAs("public/brokers/${broker_id}", $name);  
                        $data[] = $name;  
                    }

                    $brokerimage= new BrokerImage();
                    $brokerimage->img=json_encode($data);
                    $brokerimage->broker_id=$request->broker_id;
                    
                    $brokerimage->save();
                }

                $request->merge(['name' => $request->account_name, 'sort' => $request->account_sort, 'url' => $request->account_url, 'body' => $request->account_body, 'comment' => $request->account_comment]);

                SocialAccountBroker::create($request->only('broker_id','name','sort','color_sort','url','body','comment'));


                break;

            case 'الكروت الإعلانية الإلكترونية':

        
                if($request->hasFile('commercial_image'))
                {
                    $broker_id = $broker->id;

                    foreach($request->file('commercial_image') as $image)
                    {
                        $name = $image->getClientOriginalName();
                        $image->storePubliclyAs("public/brokers/${broker_id}", $name);  
                        $data[] = $name;  
                    }

                    $brokerimage= new BrokerImage();
                    $brokerimage->img=json_encode($data);
                    $brokerimage->broker_id=$request->broker_id;
                    
                    $brokerimage->save();
                }


                $latlngArray = explode(',' , $request->input('latlng'));

                $request->merge(['name' => $request->commercial_name, 'body' => $request->commercial_body, 'address' => $request->commercial_address, 'url' => $request->commercial_url, 'sort' => $request->account_sort, 'youtube_url' => $request->commercial_youtube, 'comment' => $request->commercial_comment, 'lat' => $latlngArray[0] , 'lng' => $latlngArray[1]]);

                AdCardBroker::create($request->only('broker_id','name','body','address','url','sort','url','youtube_url','comment','mobile','telephone','fax','email','premium_id','lat','lng'));


                break;

            
            case 'حجز صفحة اعلانية كاملة':
    
                $request->merge(['name' => 'epage'.rand(0,3000)]);

                if($request->hasFile('page_file'))
                {
                    $broker_id = $broker->id;

                    foreach($request->file('page_file') as $image)
                    {
                        $name = $image->getClientOriginalName();
                        $image->storePubliclyAs("public/brokers/${broker_id}", $name);  
                        $data[] = $name;  
                    }

                    $brokerimage= new BrokerImage();
                    $brokerimage->img=json_encode($data);
                    $brokerimage->broker_id=$request->broker_id;
                    
                    $brokerimage->save();
                }

                $request->merge(['url' => $request->page_url, 'comment' => $request->page_comment]);

                AdPageBroker::create($request->only('broker_id','page_widget','url','comment','color_sort'));


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
        $broker->delete();
        return redirect()->back();
    }
}
