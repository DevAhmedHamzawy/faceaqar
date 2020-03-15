@extends('main.layouts.app')

@section('content')

<!-- local_page -->
<section id="local_page">
    <div class="container">
        <!-- title_pages -->
        <div class="title_pages">
            <h2>صفحة {{ $adSort->adjective }} فى المدينة</h2>
            <span></span>
        </div>
        <!-- end_title_pages -->

        <!-- service_icon -->
        <!-- service_icon -->
        <div class="col-sm-12 col-xs-12">
            <div class="service_icon">
                <ul>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'local_estate') }}" title="">
                            <img src="{{ url('main/images/icon_r_2.png') }}" class="img-responsive" alt=""/>
                            <span>العقارات المحلية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'global_estate') }}" title="">
                            <img src="{{ url('main/images/icon_r_6.png') }}" class="img-responsive" alt=""/>
                            <span>العقارات الدولية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'project_estate') }}" title="">
                            <img src="{{ url('main/images/icon_r_1.png') }}" class="img-responsive" alt=""/>
                            <span>المشاريع العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'auction_estate') }}" title="">
                            <img src="{{ url('main/images/icon_r_4.png') }}" class="img-responsive" alt=""/>
                            <span>المزادات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'request_estate') }}" title="">
                            <img src="{{ url('main/images/icon_r_5.png') }}" class="img-responsive" alt=""/>
                            <span>الطلبات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'schema_estate') }}" title="">
                            <img src="{{ url('main/images/ss.png') }}" class="img-responsive" alt=""/>
                            <span>المخططات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'office_estate') }}" title="">
                            <img src="{{ url('main/images/regpag88.png') }}" class="img-responsive" alt=""/>
                            <span>المكاتب العقارية الإلكترونية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'broker_estate') }}" title="">
                            <img src="{{ url('main/images/regpag4141.png') }}" class="img-responsive" alt=""/>
                            <span>وسيط واجهة العقار الالكتروني</span>
                        </a>	
                    </li>
                </ul>
            </div>
        </div>	
        <!-- end_service_icon -->

        <!-- realestate_blocks -->
        <div class="realestate_blocks">
            <!-- realestate_number -->
            <div class="realestate_number">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <h3 class="number_real" style="margin-top: 10px;">عدد {{ $adSort->adjective }}  = {{ $estates->total() }} عقار</h3>
                    </div>
                    @unless($adSort->name == 'broker_estate')
                    <div class="col-sm-3  col-xs-12">
                        <div class="search_btn search_btn_engin">
                            <h2>
                                
                                <a href="{{ route('estates-map', $adSort->name) }}" title="" target="_blank">
                                شاهد العقارات على الخريطة
                                    <i class="fa fa-eye" aria-hidden="true" style="margin-left: 10px"></i>
                                    
                                </a>
                            </h2>
                        </div>
                    </div>
                    @endunless
                    <div class="col-sm-3 col-xs-12">
                        <div class="search_btn search_btn_engin">
                            @if($adSort->name == 'office_estate')
                            <h2>
                                <a href="{{ route('register') }}" title="" target="_blank">
                                                                        إضـافة {{ $adSort->display }} 

                                    <i class="fa fa-plus-circle" style="margin-left: 10px;"></i>
                                </a>
                            </h2>
                            @elseif($adSort->name == 'broker_estate')
                            <h2>
                                <a href="{{ route('brokers.create') }}" title="" target="_blank">
                                                                        إضـافة {{ $adSort->display }} 

                                    <i class="fa fa-plus-circle" style="margin-left: 10px;"></i>
                                </a>
                            </h2>
                            @else
                            <h2>
                                <a href="{{ route('estate.createestate', $adSort->name) }}" title="" target="_blank">
                                                                        إضـافة {{ $adSort->display }} 

                                    <i class="fa fa-plus-circle" style="margin-left: 10px;"></i>
                                </a>
                            </h2>
                            @endif


                        </div>
                    </div>
                    @unless($adSort->name == 'broker_estate')
                    <div class="col-sm-3 col-xs-12">
                        <div class="search_btn search_btn_engin">
                            <h2>
                                <a href="{{ route('search', $adSort->name) }}" title="" target="_blank">
                                    ابحث عن {{ $adSort->display }}
                                        <i class="fa fa-search-plus" style="margin-left: 10px;"></i>
                                
                                </a>
                            </h2>
                        </div>
                    </div>
                    @endunless
                </div>
            </div>
            <!-- end_realestate_number -->

            <!-- block_ads_realestate -->
            <div class="block_ads_realestate">
                <div class="row all-ads">
                    @forelse ($estates as $estate)
                    <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            @unless($adSort->name == 'office_estate' || $adSort->name == 'broker_estate')
                            <ul>
                                <li>{{ $estate->code }}</li>
                                <li> {{ $estate->ago }} </li>
                            </ul>
                            @endunless

                            @if($adSort->name === 'office_estate')
                            <a href="{{ route('profile', [$estate->name]) }}" title=""   style="margin-top:0;"  class="bg_tt"> {{ $estate->name }} </a>
                            @elseif($adSort->name === 'broker_estate')
                            <a href="{{ route('brokers.show', [$estate->name]) }}" title="" style="margin-top:0;" class="bg_tt"> {{ $estate->name }} </a>
                            @else
                            <a href="{{ route('estates.show', [$adSort->name, $estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
                            @endif
                            
                            <ul class="otherul">
                                @unless ($estate->category == null)
                                    <li>{{ $estate->category->name ?? 'غير معروف' }}<i class="fa fa-home"></i> </li>
                                @endunless
                                @unless($adSort->name === 'office_estate' || $adSort->name === 'broker_estate')
                                <li class="qt3a"> {{ $estate->sortName[0] ?? '' }} <i class="fas fa-building"></i> </li>
                                <li>  {{ $estate->offerName[0] ?? '' }}  <i class="far fa-gem"></i>   </li>
                                @endunless
                            </ul>
                                
                                @unless($estate->localAuctionEstate == null)

                                <ul>
                                <li> {{ $estate->localAuctionEstate->rooms_number }} <i class="fas fa-bed"></i>
                                <li> {{ $estate->localAuctionEstate->bathrooms_number }} <i class="fas fa-bath"></i> </li>
                                <li class="masaha"> <span class="Grey40" style="font-size:1.5em">م</span> <sup class="Grey40">2</sup> {{ $estate->localAuctionEstate->space }} </li>
                                <li> {{ $estate->localAuctionEstate->price }} <i class="fas fa-tag"></i>  </li>
                                </ul>

                                @endunless
                               
                            <img src="{{ $estate->main_img_path ?? url('main/images/pic_offer.jpg') }}" class="img-responsive" alt=""/>
                            @unless($adSort->name === 'office_estate' || $adSort->name === 'broker_estate')

                            <span class="paddd"> {{ $estate->center }}  <i class="fas fa-map-marker-alt"></i></span>
                            <span> {{ $estate->neighborhood }} <i class="fas fa-map-marker-alt"></i> </span>
                            
                            @unless($estate->advertiser == null)
                            <span>{{ $estate->advertiser->name }}<i class="fas fa-user-circle"></i>  </span>

                            @endunless
                            @endunless
                        </div>
                    </div>     
                    @empty
                    <h1 class="text-center">غير متاحة الان</h1>
                    @endforelse
                   
                </div>
            <!-- end_block_ads_realestate -->
        </div>
        <!-- end_realestate_blocks -->
    </div>
    </div>
</section>
<!-- end_local_page -->

<div class="text-center">{{ $estates->links() }}</div>

@endsection