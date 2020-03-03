@extends('main.layouts.app')

@section('content')

<!-- details_real -->
<section id="details_real">
    <div class="container">
        <div class="">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تفاصيل المكتب العقارى</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <!-- content_details_real -->
            <div class="content_details_real">
                <div class="block_ads_local block_time bord_small">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12  padd_left">
                            <span>
                                <strong> كود الإعلان </strong> 4521
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> تاريخ الإضافة </strong> : &nbsp; <i class="far fa-clock"></i> {{ $user->profile->create_at }}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> أخر تحديث </strong> : <i class="far fa-calendar-alt"></i> {{ $user->profile->update_at }}&nbsp;
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_right">
                            <span>
                                <strong> عدد المشاهدات : </strong> <i class="fa fa-eye"></i>{{ $views }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="block_ads_local bord_small">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 padd_left">
                            <span class="color_blue">
                                {{ $user->profile->office_name ?? '' }}
                            </span>
                        </div>
                        <div class="col-sm-4 col-xs-12 padd_right">
                            <span class="color_blue">
                               {{ $user->profile->commercial_register_no ?? '' }}
                            </span>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <span class="color_blue">
                            نوع نشاط المكتب العقاري
                            </span>
                        </div>
                    </div>
                </div>
                <div class="block_ads_local bord_small">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 padd_left">
                            <span class="color_blue blue2">
                                <i class="fa fa-map-pin"></i> {{ $user->profile->area->name ?? '' }} | 
                                <i class="fa fa-map-marker"></i> {{ $areaName ?? '' }}  |
                                <i class="fa fa-map"></i> {{ $user->profile->center }}  | 
                                <i class="fa fa-map-signs"></i> {{ $user->profile->neighborhood }} |
                                <i class="fa fa-map-pin"></i> {{ $user->profile->street }} 

</span>
                        </div>
                        <div class="col-sm-4 col-xs-12 padd_right">
                            <span class="color_blue">
                        العنوان التفصيلي للمكتب العقاري	<i class="fas fa-map-marked-alt"></i> 
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="block_ads_localnew">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="social-medianew">
                            <ul>
                                <li> <a href="{{ $user->profile->facebook }}"> <img src="images/fb.png">
                                </a> </li>
                                <li> <a href="{{ $user->profile->instagram }}"> <img src="images/ins.png"> </a> </li>
                                <li> <a href="{{ $user->profile->twitter }}"> <img src="images/tw.png"> </a> </li>
                                <li> <a href="{{ $user->profile->youtube }}"> <img src="images/yo.png"> </a> </li>
                                <li> <a href="{{ $user->profile->whatsapp }}"> <img src="images/wh.png"> </a> </li>
                                <li> <a href="{{ $user->profile->snapchat }}"> <img src="images/sn.png"> </a> </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

                </div>
                        <div class="map_cont">
                    <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-8 " >
                            <div class="mySlides">

                            {{--@foreach ($user->images as $key=>$img)
                                <div class="mySlides">
                                <div class="numbertext">{{ $key }} / {{ count($user->images) }}</div>
                                    <img src="{{ $img }}" style="width:100%">
                                </div>
                            @endforeach--}}

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>



<div class="row">

    {{--@foreach ($user->profile->images as $key=>$img)
    <div class="column">
        <img class="demo cursor" src="{{ $img }}" style="width:100%" onclick="currentSlide({{$key}})" alt="{{ $estate->name }}">
    </div>   
@endforeach--}}

</div>
</div>

            <div class="col-md-4 col-sm-12 col-xs-12 pull-left">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27626.27366240017!2d31.35026109284309!3d30.057386886394237!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1485270685978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            <div class="block_ads_local block_time no-eff">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="">
                                            <i class="fa fa-eye"></i> معاينة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="#" title="">
                                            <i class="fa fa-save"></i> حفظ
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="" data-toggle="modal" data-target="#share">
                                            <i class="fa fa-share-square"></i> مشاركة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="#" title="">
                                            <i class="fa fa-print"></i> طباعة
                                        </a>
                                    </div>
                                
                            </div>
                        </div>		
                        
                            

                    
                </div>	
                    </div>	
                </div>	
                

                <div class="service_text">
                    <h3>وصف اكثر عن النشاط العقاري </h3>
                    <p>{{ $user->profile->description }}</p>
                </div>
                <div class="tabel_details_rael">
                    <table class="table table-bordered">
                        <tbody class="table_oio">
                            <tr>
                                <th class="title_table" width="30%">شاهد المكتب العقاري على اليوتيوب </th>
                                <th class="title_table"><a href="{{ $user->profile->youtube }}"> <i class="fab fa-youtube"></i> </a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <!-- https://www.codexworld.com/like-dislike-rating-system-jquery-ajax-php/ -->
                    <div class="row ">
                        
                        <div class="col-md-6 col-xs-12 visible-xs">
                            <div class="report">
                                <button type="submit" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12 ">
                            <h4 class="rateing">تقييم المحتوى</h4>
                             <div class="rateing_icons d-flex flex-row justify-content-cente">
                                <div class="p-2"> 
                                    <i id="like1" class="fa fa-thumbs-up"></i> <div id="like1-bs3"></div>
                                </div>
                                
                                <div class="p-2">
                                    <i id="dislike1" class="fa fa-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6 col-xs-12 hidden-xs">
                            <div class="report">
                                <button type="submit" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                            </div>
                        </div>
                    </div>
                <div class="row" id="contact_us_page">
                    <div class="col-sm-6 col-xs-12">
                        <div class="info_foo_con info_foo_con_00">
                            <h3 class="title_contct_us">معلومات التواصل</h3>
                            <ul>
                                <li>
                                    <i class="fa fa-user" style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">اسم المستخدم</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->name }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-user" style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">اسم المعلن</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->full_name }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-user"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">نوع المعلن</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">نص نص نص نص</a>
                                </li>
                                <li>
                                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">الجوال 1</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->mobile1 }}</a>
                                </li>
                                <li>
                                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">الجوال 2</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->mobile2 }}</a>
                                </li>
                                <li>
                                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">تلفون</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->telephone }}</a>
                                </li>
                                <li>
                                    <i class="fa fa-fax"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">فاكس</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->fax }}</a>
                                </li>
                                <li>
                                    <i class="fas fa-mobile"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">سنترال</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->central }}</a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">البريد الإلكترونى</strong>
                                    <a href="tel" target="_blank" style="font-size: 16px;padding-right: 40px">{{ $user->profile->email }}</a>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i>
                                    <strong style="font-size: 16px">الموقع الإلكترونى</strong>
                                    <a href="tel" target="_blank"style="font-size: 16px;padding-right: 40px">{{ $user->profile->website }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form_cont form_cont_00">
                        <h3 class="title_contct_us">ارسال رسالة خاصة إلى المعلن</h3>
                            <form>
                                <div class="form-group">
                                    <label for=""> <i class="fa fa-user"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> الأسم </label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>	
                                <div class="form-group">
                                    <label for=""> <i class="fa fa-phone"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> رقم الجوال </label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for=""> <i class="fas fa-envelope"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> البريد الإلكترونى </label>
                                    <input type="text" class="form-control" id="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for=""> <i class="fas fa-envelope-open-text"  style="float: right;font-size: 20px;color: #2e6da4;padding-left: 3px;"></i> النص </label>
                                    <textarea class="form-control" rows="6"></textarea>
                                </div>	
                                <button type="submit" class="btn btn-default btn_web">إرســال</button>
                            </form>
                        </div>
                    </div>
                </div>
               {{-- <div class="realestate_number">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                        <h3 class="number_real">عدد العقارات الخاصة بالمكتب العقاري = 200 عقار</h3>
                        </div>
                    </div>
                </div>

            <div class="block_ads_realestate">
                <div class="row">
                <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                                <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                            <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                                                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>

                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                            <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>
    
                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                                <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                    
</div>
            </div>--}}
            
            
            <!-- end_content_details_real -->
        </div>
    </div>
</section>
<!-- end_details_real -->

@endsection