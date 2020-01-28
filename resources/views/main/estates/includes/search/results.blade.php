<!-- realestate_blocks -->
<div class="realestate_blocks">
    <!-- realestate_number -->
    <div class="realestate_number">
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <h3 class="number_real" style="margin-top: 10px;">عدد النتائج  = {{ $results->count() }} عقار</h3>
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
            @foreach ($results as $estate)
            <div class="col-sm-3 col-xs-12">
                <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                    <ul>
                        <li>{{ $estate->code }}</li>
                        <li> {{ $estate->created_at }} </li>
                    </ul>
                    <a href="{{ route('estates.show', [$adSort->name, $estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
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
            @endforeach
        </div>
    <!-- end_block_ads_realestate -->
    <div class="text-center">{{ $results->links() }}</div>
</div>
<!-- end_realestate_blocks -->