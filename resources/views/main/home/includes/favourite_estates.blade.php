<div class="ser-marketing">
    <div class="container">
        <div class="all-titles">
            <h2>عقاراتى المفضلة</h2>
            <p></p>
            <a href="#"></a>
        </div>
    </div>


    <!-- block_ads_realestate -->
    <div class="block_ads_realestate">
        <div class="row all-ads">
            @forelse (auth()->user()->favourites as $favourite)
            <div class="col-sm-3 col-xs-12">
                <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                    <ul>
                        <li>{{ $favourite->estate->code }}</li>
                        <li> {{ $favourite->estate->ago }} </li>
                    </ul>
                    <a href="{{ route('estates.show', [$favourite->estate->ad_sort_id, $favourite->estate->name]) }}" title="" class="bg_tt"> {{ $favourite->estate->name }} </a>
                    <ul class="otherul">
                        @unless ($favourite->estate->category == null)
                            <li>{{ $favourite->estate->category->name }}<i class="fa fa-home"></i> </li>
                        @endunless
                        <li class="qt3a"> {{ $favourite->estate->sortName }} <i class="fas fa-building"></i> </li>
                        <li>  {{ $favourite->estate->offerName }}  <i class="far fa-gem"></i>   </li>
                    </ul>
                        
                        @unless($favourite->estate->localAuctionEstate == null)

                        <ul>
                        <li> {{ $favourite->estate->localAuctionEstate->rooms_number }} <i class="fas fa-bed"></i>
                        <li> {{ $favourite->estate->localAuctionEstate->bathrooms_number }} <i class="fas fa-bath"></i> </li>
                        <li class="masaha"> <span class="Grey40" style="font-size:1.5em">م</span> <sup class="Grey40">2</sup> {{ $favourite->estate->localAuctionEstate->space }} </li>
                        <li> {{ $favourite->estate->localAuctionEstate->price }} <i class="fas fa-tag"></i>  </li>
                        </ul>

                        @endunless
                        
                    <img src="{{ $favourite->estate->main_img_path }}" class="img-responsive" style="height:240px" alt=""/>

                    <span class="paddd"> {{ $favourite->estate->center }}  <i class="fas fa-map-marker-alt"></i></span>
                    <span> {{ $favourite->estate->neighborhood }} <i class="fas fa-map-marker-alt"></i> </span>
                    
                    @unless($favourite->estate->advertiser == null)
                    <span>{{ $favourite->estate->advertiser->advertiser_name }}<i class="fas fa-user-circle"></i>  </span>
                
                    @endunless
                </div>
            </div>
            @empty
            <h1 class="text-center">لم تقم بإضافة أى عقار إلى المفضلة الان</h1>     
            @endforelse
        </div>
        <!-- end_block_ads_realestate -->
        <div class="text-center">{{-- auth()->user()->estates->links() --}}</div>
    </div>
    <!-- end_realestate_blocks -->

</div>