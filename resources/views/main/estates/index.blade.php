@extends('main.layouts.app')

@section('content')

<!-- local_page -->
<section id="local_page">
    <div class="container">
        <!-- title_pages -->
        <div class="title_pages">
            <h2>صفحة العقارات المحليه فى المدينة</h2>
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
                            <img src="{{ url('images/icon_r_2.png') }}" class="img-responsive" alt=""/>
                            <span>العقارات المحلية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'global_estate') }}" title="">
                            <img src="{{ url('images/icon_r_6.png') }}" class="img-responsive" alt=""/>
                            <span>العقارات الدولية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'project_estate') }}" title="">
                            <img src="{{ url('images/icon_r_1.png') }}" class="img-responsive" alt=""/>
                            <span>المشاريع العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'auction_estate') }}" title="">
                            <img src="{{ url('images/icon_r_4.png') }}" class="img-responsive" alt=""/>
                            <span>المزادات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'request_estate') }}" title="">
                            <img src="{{ url('images/icon_r_5.png') }}" class="img-responsive" alt=""/>
                            <span>الطلبات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'schema_estate') }}" title="">
                            <img src="{{ url('images/ss.png') }}" class="img-responsive" alt=""/>
                            <span>المخططات العقارية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'office_estate') }}" title="">
                            <img src="{{ url('images/regpag88.png') }}" class="img-responsive" alt=""/>
                            <span>المكاتب العقارية الإلكترونية</span>
                        </a>	
                    </li>
                    <li>
                        <a href="{{ route('search-by-ad-sort' , 'middleware_estate') }}" title="">
                            <img src="{{ url('images/regpag4141.png') }}" class="img-responsive" alt=""/>
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
                        <h3 class="number_real" style="margin-top: 10px;">عدد العقارات المحليه = 200 عقار</h3>
                    </div>
                    <div class="col-sm-3  col-xs-12">
                        <div class="search_btn search_btn_engin">
                            <h2>
                                <a href="#" title="" target="_blank" data-toggle="modal" data-target="#elc_real_se">
                                شاهد العقارات على الخريطة
                                    <i class="fa fa-eye" aria-hidden="true" style="margin-left: 10px"></i>
                                    
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="search_btn search_btn_engin">
                            <h2>
                                <a href="#" title="" target="_blank" data-toggle="modal" data-target="#elc_real_se">
                                                                        إضـافة {{ $adSort->display }} 

                                    <i class="fa fa-plus-circle" style="margin-left: 10px;"></i>
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="search_btn search_btn_engin">
                            <h2>
                                <a href="#" title="" target="_blank" data-toggle="modal" data-target="#elc_real_se">
                                    ابحث عن {{ $adSort->display }}
                                        <i class="fa fa-search-plus" style="margin-left: 10px;"></i>
                                
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end_realestate_number -->

            <!-- block_ads_realestate -->
            <div class="block_ads_realestate">
                <div class="row all-ads">
                    @foreach ($estates as $estate)
                    <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li>{{ $estate->code }}</li>
                                <li> {{ $estate->created_at }} </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> {{ $estate->date }} </a>
                            <ul class="otherul">
                                @unless ($estate->category == null)
                                    <li>{{ $estate->category->name }}<i class="fa fa-home"></i> </li>
                                @endunless
                                {{--<li class="qt3a"> {{ $estate->sortName[0] }} <i class="fas fa-building"></i> </li>
                                <li>  {{ $estate->offerName[0] }}  <i class="far fa-gem"></i>   </li>--}}
                            </ul>
                                
                                @unless($estate->localAuctionEstate == null)

                                <ul>
                                <li> {{ $estate->localAuctionEstate->rooms_number }} <i class="fas fa-bed"></i>
                                <li> {{ $estate->localAuctionEstate->bathrooms_number }} <i class="fas fa-bath"></i> </li>
                                <li class="masaha"> <span class="Grey40" style="font-size:1.5em">م</span> <sup class="Grey40">2</sup> {{ $estate->localAuctionEstate->space }} </li>
                                <li> {{ $estate->localAuctionEstate->price }} <i class="fas fa-tag"></i>  </li>
                                </ul>

                                @endunless
                                
                            <img src="{{ url('main/images/pic_offer.jpg') }}" class="img-responsive" alt=""/>

                            <span class="paddd"> {{ $estate->center }}  <i class="fas fa-map-marker-alt"></i></span>
                            <span> {{ $estate->neighborhood }} <i class="fas fa-map-marker-alt"></i> </span>
                            
                            @unless($estate->advertiser == null)
                            <span>{{ $estate->advertiser->name }}<i class="fas fa-user-circle"></i>  </span>
                            @endunless
                        </div>
                    </div>     
                    @endforeach
                   
                </div>
            <!-- end_block_ads_realestate -->
        </div>
        <!-- end_realestate_blocks -->
    </div>
    </div>
</section>
<!-- end_local_page -->

@endsection


@section('footer')

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        /*function getEstateSort(adSort){
            axios.get(`../../estates/${adSort}`).then((data) => {
                $('.all-ads').empty();
                
                for(let d of data.data){
                $('.all-ads').append('<div class="col-sm-3 col-xs-12"><div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">');
                let date = new Date(d.created_at)
                const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };

                date = date.toLocaleDateString('ar-EG', options);
                $('.block_ads_inter').append('<ul><li>'+d.code+'</li><li>'+date+'</li></ul><a href="#" title="" class="bg_tt">'+d.name+'</a>');
                $('.block_ads_inter').append('<ul class="otherul"><li>'+d.category.name+'<i class="fa fa-home"></i> </li><li class="qt3a">'+d.sortName[0]+'<i class="fas fa-building"></i> </li><li>'+d.offerName[0]+'<i class="far fa-gem"></i>   </li></ul>');
                if(d.localAuctionEstate != null){
                    $('.block_ads_inter').append('<ul><li>'+d.localAuctionEstate.rooms_number+'<i class="fas fa-bed"></i><li>'+d.localAuctionEstate.bathrooms_number+'<i class="fas fa-bath"></i> </li><li class="masaha"> <span class="Grey40" style="font-size:1.5em">م</span> <sup class="Grey40">2</sup>'+d.space+'</li><li>'+d.price+'<i class="fas fa-tag"></i>  </li></ul>');
                }
                $('.block_ads_inter').append('<img src="{{ asset('main/images/pic_offer.jpg') }}" class="img-responsive" alt=""/><span class="paddd">'+d.center+'<i class="fas fa-map-marker-alt"></i></span><span>'+d.neighborhood+'<i class="fas fa-map-marker-alt"></i> </span>');
                
                if(d.advertiser != null){
                    $('.block_ads_inter').append('<span>'+d.advertiser.name+'<i class="fas fa-user-circle"></i></span><br/><br/>');
                }
                
                $('.block_ads_inter').append('</div></div>');
                }
            });
        }*/
    </script>
@endsection