@extends('main.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <div class="servic-title">
                    <div class="container">
                        <h1>الصفحة الشخصية</h1>
                    </div>
                </div>


                
                <div class="container">
                    <img src="{{ url('main/images/team1.png') }}" class="center-block img-circle" alt="Cinque Terre">
                    <h1 class="text-center">{{ auth()->user()->name }}</h1>
                    <a href="{{ route('edit-profile', auth()->user()->name) }}" class="btn btn-primary" style="margin: 10px 45% 0 0;"><h5>تعديل بياناتى</h5></a>
                </div>
               

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                

                <div class="ser-marketing">
                    <div class="container">
                        <div class="all-titles">
                            <h2>عقاراتى</h2>
                            <p></p>
                            <a href="#"></a>
                        </div>
                    </div>


                    <!-- block_ads_realestate -->
                    <div class="block_ads_realestate">
                        <div class="row all-ads">
                            @forelse (auth()->user()->estates as $estate)
                            <div class="col-sm-3 col-xs-12">
                                <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                                    <ul>
                                        <li>{{ $estate->code }}</li>
                                        <li> {{ $estate->created_at }} </li>
                                    </ul>
                                    <a href="{{ route('estates.show', ['local_estate', $estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
                                    <ul class="otherul">
                                        @unless ($estate->category == null)
                                            <li>{{ $estate->category->name }}<i class="fa fa-home"></i> </li>
                                        @endunless
                                        <li class="qt3a"> {{ $estate->sortName[0] }} <i class="fas fa-building"></i> </li>
                                        <li>  {{ $estate->offerName[0] }}  <i class="far fa-gem"></i>   </li>
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
                            @empty
                            <h1 class="text-center">لم تقم بإضافة أى عقار إلى الان</h1>     
                            @endforelse
                        </div>
                        <!-- end_block_ads_realestate -->
                        <div class="text-center">{{-- auth()->user()->estates->links() --}}</div>
                    </div>
                    <!-- end_realestate_blocks -->

                </div>

                <div class="ser-marketing">
                    <div class="container">
                        <div class="all-titles">
                            <h2> احجز صفحتك الاعلانية العقارية بالموقع حسب نوع نشاطك العقاري <img src="http://localhost:8000/main/images/regmedia.png"> </h2>
                            <p> </p>
                            <a href="#"></a>
                        </div>
                        <div class="items-marketing regpage-items">
                            <div class="row">
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/local_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag1.png">
                                            <h2> اضافة عقار محلي </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/global_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag22.png">
                                            <h2> اضافة عقار دولي </h2>
                                        </div>
                                    </div>
            
                                    </a></div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/project_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag3.png">
                                            <h2> اضافة مشروع عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/auction_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag4.png">
                                            <h2> اضافة مزاد عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/request_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag5.png">
                                            <h2> اضافة طلب عقاري </h2>
                                        </div>
                                    </div>
            
                                    </a></div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/estates/schema_estate/create">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag6.png">
                                            <h2> اضافة مخطط عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-12">
                                    <a href="http://localhost:8000/register">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag7.png">
                                            <h2> اضافة مكتب عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ser-marketing">
                    <div class="container">
                        <div class="all-titles">
                            <h2>ابحث عن عقارك المناسب بالموقع <img src="http://localhost:8000/main/images/searchaqar.png"> </h2>
                            <p></p>
                            <a href="#"></a>
                        </div>
                        <div class="items-marketing regpage-items">
                            <div class="row">
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/local_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag111.png">
                                            <h2> بحث عقار محلي </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/global_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag222.png">
                                            <h2> بحث عقار دولي </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/project_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag333.png">
                                            <h2> بحث مشروع عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/auction_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag444.png">
                                            <h2> بحث مزاد عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/request_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag555.png">
                                            <h2> بحث طلب عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-6">
                                    <a href="http://localhost:8000/search/schema_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag666.png">
                                            <h2> بحث مخطط عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-12">
                                    <a href="http://localhost:8000/search/office_estate">
                                    <div class="item-mark">
                                        <div class="tit-item-mark">
                                            <img src="http://localhost:8000/main/images/regpag777.png">
                                            <h2> بحث مكتب عقاري </h2>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
