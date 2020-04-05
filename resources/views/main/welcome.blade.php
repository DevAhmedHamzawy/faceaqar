@extends('main.layouts.app')

@section('title') {{ $settings->name }} @endsection

@section('content')


      <!-- search pages -->
      <div class="search-pages">
        <div class="container">
            <div class="inside-search">
                <div class="row">
                    <div class="col-md-3 col-sm-12 no-pad">
                        <div class="right-sepag">
                            <img src="{{ url('main/images/se-pag.png') }}">
                        </div>
                    </div>
                    <form action="{{ route('search-by-ad-sort') }}" method="GET">
                    <div class="col-md-6 col-sm-12 no-pad">
                        <div class="center-sepag">
                            <h2>البحث عن الصفحات الاعلانية الالكترونية بالموقع</h2>
                            <div class="row" style="padding-bottom:15px;">
                                <div class="col-md-6">
                                <select class="form-control" onchange="getCities(this);">
                                  <option value="">اختر اسم الدولة</option>
                                  @foreach ($areas as $area)
                                      <option value="{{ $area->name }}">{{ $area->name }}</option>
                                  @endforeach
                                </select>
                                </div>
                                <div class="col-md-6">
                                
                                <select class="form-control" name="city_id" id="cities">
                                 <option value="">اختر اسم المنطقة</option>
                                </select>
                                </div>
                            </div>

                            <div class="sel2 sel2home">
                                <div class="custom-select">
                                <select name="ad_sort_id" required>
                                  <option value="">اختر نوع الصفحة الاعلانية</option>
                                  @foreach ($adSorts as $key=>$value)
                                    <option value="{{ $value }}">{{ $key }}</option>
                                  @endforeach
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn">ابدأ البحث</button>
                        </div>
                    </div>
                    </form>
                    <div class="col-md-3 col-sm-12 no-pad">
                        <div class="left-sepag">
                            <p>الصفحات العقارية الالكترونية وكيفية التعامل معها بالشكل الصحيح المباشر المبسط لعملاء الكرام نحن في خدمتكم</p>
                            <p>الصفحات العقارية الالكترونية وكيفية التعامل معها بالشكل الصحيح المباشر المبسط لعملاء الكرام نحن في خدمتكم</p>
                            <a href="#">... اقرأ المزيد</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- services of website -->
    <div class="servic-title">
        <div class="container">
            <h1> خدمات موقع واجهة العقار الالكتروني</h1>
        </div>
    </div>
    
    <!-- services marketing -->
    <div class="ser-marketing">
        <div class="container">
            <div class="all-titles">
                <h2> الخدمات التسويقية الالكترونية <img src="{{ url('main/images/sermark.png') }}"> </h2> <p></p>
                <a href="#"> </a>
            </div>
            <div class="items-marketing">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ $pages[0]->icon_path }}">
                                <h2> {{ $pages[0]->title }} </h2>
                                <p>{{ str_limit($pages[0]->body, 100) }}</p>
                                <a href="{{ route('pages.show-page', $pages[0]->id) }}">... اقرأ المزيد</a>
                            </div>
                            <div class="desk-item-mark">
                               @foreach ($pages[0]->children as $child)
                                    <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ $pages[1]->icon_path }}">
                                <h2> {{ $pages[1]->title }} </h2>
                                <p>{{ str_limit($pages[1]->body, 100) }}</p>
                                <a href="{{ route('pages.show-page', $pages[1]->id) }}">... اقرأ المزيد</a>
                            </div>
                            <div class="desk-item-mark">
                               @foreach ($pages[1]->children as $child)
                                    <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ $pages[2]->icon_path }}">
                                <h2> {{ $pages[2]->title }} </h2>
                                <p>{{ str_limit($pages[2]->body, 100) }}</p>
                                <a href="{{ route('pages.show-page', $pages[2]->id) }}">... اقرأ المزيد</a>
                            </div>
                            <div class="desk-item-mark">
                               @foreach ($pages[2]->children as $child)
                                    <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ $pages[3]->icon_path }}">
                                <h2> {{ $pages[3]->title }} </h2>
                                <p>{{ str_limit($pages[3]->body, 100) }}</p>
                                <a href="{{ route('pages.show-page', $pages[3]->id) }}">... اقرأ المزيد</a>
                            </div>
                            <div class="desk-item-mark">
                               @foreach ($pages[3]->children as $child)
                                    <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                               @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- banner 1 -->
    <div class="banner1">
        <div class="container">
           <a href="#"> <img src="{{ url('main/images/banner1.png') }}"> </a> 
        </div>
    </div>

    <!-- estate services -->
    <div class="ser-marketing">
        <div class="container">
                 <div class="all-titles"> <h2> الخدمات العقارية <img src="{{ url('main/images/estate.png') }}"> </h2> <p></p> <a href="#"></a> </div>
            <div class="items-marketing">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($pages[4]->children as $child)
                            <div class="item-mark">
                                <div class="desk-item-mark col-md-3 col-sm-4 col-xs-6">
                                    <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="#more" class="btnmore red-color"> ... عرض المزيد <i class="fas fa-plus"></i> </a>
        </div>
    </div>
    
    <!-- goverment services -->
    <div class="ser-marketing">
        <div class="container">
            <div class="all-titles">
                <h2> الخدمات الحكومية الالكترونية <img src="{{ url('main/images/gover.png') }}"> </h2>
                <p></p>
                <a href="#"></a>
            </div>
            <div class="items-marketing">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="item-mark item-gover">
                                    <div class="tit-item-mark">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <img src="{{ $pages[4]->icon_path }}">
                                                <h2> {{ $pages[4]->title }} </h2>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p>{{ str_limit($pages[4]->body, 100) }}</p>
                                                <a href="{{ route('pages.show-page', $pages[4]->id) }}">... اقرأ المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @foreach ($pages[4]->children as $child)
                                    <div class="item-mark">
                                        <div class="desk-item-mark col-md-6 col-xs-12">
                                            <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="item-mark item-gover">
                                    <div class="tit-item-mark">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6">
                                                <img src="{{ $pages[5]->icon_path }}">
                                                <h2> {{ $pages[5]->title }} </h2>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <p>{{ str_limit($pages[5]->body, 100) }}</p>
                                                <a href="{{ route('pages.show-page', $pages[5]->id) }}">... اقرأ المزيد</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                @foreach ($pages[4]->children as $child)
                                    <div class="item-mark">
                                        <div class="desk-item-mark col-md-6 col-xs-12">
                                            <h4><a href="{{ route('pages.show-page', $child->id) }}">{{ $child->title }}</a></h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#more" class="btnmore red-color"> ... عرض المزيد <i class="fas fa-plus"></i> </a>
        </div>
    </div>
    
    <!-- register your page -->
    <div class="ser-marketing">
        <div class="container">
            <div class="all-titles">
                <h2> احجز صفحتك الاعلانية العقارية بالموقع حسب نوع نشاطك العقاري <img src="{{ url('main/images/regmedia.png') }}"> </h2>
                <p> </p>
                <a href="#"></a>
            </div>
            <div class="items-marketing regpage-items">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'local_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag1.png') }}">
                                <h2> اضافة عقار محلي </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'global_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag22.png') }}">
                                <h2> اضافة عقار دولي </h2>
                            </div>
                        </div>

                        </a></div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'project_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag3.png') }}">
                                <h2> اضافة مشروع عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'auction_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag4.png') }}">
                                <h2> اضافة مزاد عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'request_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag5.png') }}">
                                <h2> اضافة طلب عقاري </h2>
                            </div>
                        </div>

                        </a></div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('estate.createestate', 'schema_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag6.png') }}">
                                <h2> اضافة مخطط عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <a href="{{ route('register') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag7.png') }}">
                                <h2> اضافة مكتب عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- register your page -->
    <div class="ser-marketing">
        <div class="container">
            <div class="all-titles">
                <h2>ابحث عن عقارك المناسب بالموقع <img src="{{ url('main/images/searchaqar.png') }}"> </h2>
                <p></p>
                <a href="#"></a>
            </div>
            <div class="items-marketing regpage-items">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'local_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag111.png') }}">
                                <h2> بحث عقار محلي </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'global_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag222.png') }}">
                                <h2> بحث عقار دولي </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'project_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag333.png') }}">
                                <h2> بحث مشروع عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'auction_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag444.png') }}">
                                <h2> بحث مزاد عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'request_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag555.png') }}">
                                <h2> بحث طلب عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <a href="{{ route('search', 'schema_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag666.png') }}">
                                <h2> بحث مخطط عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12">
                        <a href="{{ route('search', 'office_estate') }}">
                        <div class="item-mark">
                            <div class="tit-item-mark">
                                <img src="{{ url('main/images/regpag777.png') }}">
                                <h2> بحث مكتب عقاري </h2>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- customers -->
    <div class="sec-customers">
        <div class="container">
            <h1>عملائنا</h1>
            <div class="owl-carousel customers">
            @foreach ($clients as $client)
                <div class="item"> 
                    <a href="#"> <img src="{{ $client->img_path }}"> <h4>{{ $client->name }} <img src="{{ url('main/images/slidpos.png') }}"> </h4> </a> 
                </div>
            @endforeach  
            </div>
        </div>
    </div>
    
    <!-- our works -->
    <div class="sec-customers ourwork">
        <div class="container">
            <h1>أعمالنا</h1>
            <div class="owl-carousel customers">
              @foreach ($portfolios as $portfolio)
                <div class="item"> 
                    <a href="#"> 
                        <img src="{{ $portfolio->img_path }}"> 
                        <div class="ourwork-desk">
                            <h4>{{ $portfolio->name }}</h4>
                            <p>{{ $portfolio->date }}</p>
                            <img src="{{ url('main/images/slidpos.png') }}">
                        </div>
                    </a> 
                </div>
              @endforeach  
            </div>
        </div>
    </div>
    
    <!-- team -->
    <div class="team">
        <div class="container">
            <h1 class="tit-las">فريق العمل</h1>
            <div class="items-team">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <img src="{{ url('main/images/team1.png') }}">
                            <h4>{{ $team->name }}</h4>
                            <p>{{ $team->role ?? 'ادارة الموقع' }}</p>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
    <!-- contact us -->
    <div class="contactus">
        <div class="container">
            <h1 class="tit-las con-tit">اتصل بنا</h1>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="right-con">
                        <img src="{{ url('main/images/logo.png') }}">
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="276px" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="info-contact">
                        <h2 class="tit-info">معلومات التواصل</h2>
                        <div class="item-info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4> العنوان </h4>
                            <p class="formob" style="margin:0">{{ $settings->address }}</p>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> ادارة الموقع </h4>
                            <a href="#" title="..."><p>{{ $settings->site_manager_phone }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> الخدمات التسويقية </h4>
                            <a href="#" title="..."><p>{{ $settings->marketing_services }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> الخدمات العقارية </h4>
                            <a href="#" title="..."><p>{{ $settings->estate_services }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> الخدمات الحكومية </h4>
                            <a href="#" title="..."><p>{{ $settings->government_services }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> الرقم الموحد  </h4>
                            <a href="#" title="..."><p>{{ $settings->unified_number }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4> خدمة العملاء </h4>
                            <a href="#" title="..."><p>{{ $settings->customer_service }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-phone"></i>
                            <h4> التلفون </h4>
                            <a href="#" title="..."><p>{{ $settings->telephone }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-phone"></i>
                            <h4> السنترال </h4>
                            <a href="#" title="..."><p>{{ $settings->central }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="fas fa-fax"></i>
                            <h4> فاكس </h4>
                            <a href="#" title="..."><p>{{ $settings->fax }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="far fa-envelope"></i>
                            <h4> صندوق البريد </h4>
                            <a href="#" title="..."><p>{{ $settings->postal_code }}</p></a>
                        </div>
                        <div class="item-info">
                            <i class="far fa-envelope"></i>
                            <h4> الرمز البريدي </h4>
                            <a href="#" title="..."><p>{{ $settings->postal_number }}</p></a>
                        </div>
                        <div class="item-info" style="border: 0">
                            <i class="far fa-envelope"></i>
                            <h4> البريد الالكتروني </h4>
                            <a href="#" title="..."><p>{{ $settings->email }}</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <h2 class="tit-info">تواصل معنا</h2>
                    <div class="row left-con">
                        <div id="success-message"></div>
                        <form>
                            <div class="col-xs-12">
                                <div class="icon-con">
                                    <i class="fa fa-map"></i>
                                </div>
                                <h2>اختر الدولة</h2>
                                <select onchange="getCities(this);">
                                    @foreach ($areas as $area)
                                      <option value="{{ $area->name }}">{{ $area->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="icon-con">
                                   <i class="fas fa-map-marked-alt"></i>
                                </div>
                                <h2>اختر المنطقة</h2>
                                <select id="cities" onchange="getSubCities(this);">
                                
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="icon-con">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h2>اختر المدينة</h2>
                                <select id="area_id">
                                  
                                </select>
                                <span id="area-id-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12">
                                <div class="icon-con">
                                    <i class="fa fa-user"></i>
                                </div>
                                <h2>الاسم</h2>
                                <input type="text" class="name">
                                <span class="name-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="icon-con">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <h2>رقم الجوال</h2>
                                <input type="text" class="mobile">
                                <span class="mobile-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="icon-con">
                                    <i class="fa fa-envelope "></i>
                                </div>
                                <h2>عنوان البريد الالكتروني</h2>
                                <input type="email" class="email">
                                <span class="email-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12 ">
                                <div class="icon-con">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <h2>اختر نوع الخدمة الالكترونية</h2>
                                <select id="service_id">
                                  <option value="0">اختر</option>
                                  <option value="2">مصر</option>
                                  <option value="3">المغرب</option>
                                  <option value="4">الامارات</option>
                                </select>
                                <span class="service-id-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12">
                                <div class="icon-con">
                                    <i class="fa fa-image"></i>
                                </div>
                                <h2> ارفاق ملف </h2>
                                <input id="file" type="file">
                            </div>
                            <div class="col-xs-12">
                                <div class="icon-con">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <h2> اترك رسالة</h2>
                                <textarea class="body"></textarea>
                                <span class="body-contact-error invalid-feedback" role="alert"></span>
                            </div>
                            <div class="col-xs-12">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            <button onclick="sendContact();return false;" class="btn">إرسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    <script>






        window.form_data = new FormData();

$(document).on('change','#file',function(e){

let file_data = $('#file').prop('files')[0];
form_data.append('file_data', file_data);


});





function sendContact(){
    form_data.append('area_id', $(".area_id").val())
    form_data.append('name', $(".name").val())
    form_data.append('mobile', $(".mobile").val())
    form_data.append('email', $(".email").val())
    form_data.append('service_id', $(".service_id").val())
    form_data.append('body', $(".body").val())

    axios.post('../../sendcontact', form_data)
                .then((data) => {


                     //$(".area_id").val('');
                     $(".name").val('');
                    $(".mobile").val('');
                    $(".email").val('');
                    //$(".service_id").val('');
                    $(".body").val('');

                    $('.name-contact-error').empty();
                    $('.body-contact-error').empty();
                    $('.mobile-contact-error').empty();
                    $('.email-contact-error').empty();


                    $('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> الرسالة قد تم إرسالها بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                    }, 2000);
                }).catch((error) => {

                    $('.name-contact-error').empty();
                    $('.body-contact-error').empty();
                    $('.mobile-contact-error').empty();
                    $('.email-contact-error').empty();

                    if(error.response.data.errors.area_id){
                    $('.area-id-contact-error').append('<strong>'+error.response.data.errors.area_id+'</strong>');
                    $('.area-id-contact').addClass('is-invalid')
                }
                if(error.response.data.errors.name){
                    $('.name-contact-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name').addClass('is-invalid')
                }
                if(error.response.data.errors.email){
                    $('.email-contact-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email').addClass('is-invalid')
                }
                if(error.response.data.errors.mobile){
                    $('.mobile-contact-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                    $('.mobile').addClass('is-invalid')
                }
                if(error.response.data.errors.body){
                    $('.body-contact-error').append('<strong>'+error.response.data.errors.body+'</strong>');
                    $('.body').addClass('is-invalid')
                }
                });

}
    </script>
@endsection