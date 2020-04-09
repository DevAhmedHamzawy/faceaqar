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
                        <li> {{ $estate->ago }} </li>
                    </ul>
                    <a href="{{ route('estates.show', [$estate->ad_sort_id, $estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
                    <ul class="otherul">
                        @unless ($estate->category == null)
                            <li>{{ $estate->category->name }}<i class="fa fa-home"></i> </li>
                        @endunless
                        <li class="qt3a"> {{ $estate->sort_name }} <i class="fas fa-building"></i> </li>
                        <li>  {{ $estate->offer_name }}  <i class="far fa-gem"></i>   </li>
                    </ul>
                        
                        @unless($estate->localAuctionEstate == null)

                        <ul>
                        <li> {{ $estate->localAuctionEstate->rooms_number }} <i class="fas fa-bed"></i>
                        <li> {{ $estate->localAuctionEstate->bathrooms_number }} <i class="fas fa-bath"></i> </li>
                        <li class="masaha"> <span class="Grey40" style="font-size:1.5em">م</span> <sup class="Grey40">2</sup> {{ $estate->localAuctionEstate->space }} </li>
                        <li> {{ $estate->localAuctionEstate->price }} <i class="fas fa-tag"></i>  </li>
                        </ul>

                        @endunless
                        
                    <img src="{{ $estate->main_img_path }}" class="img-responsive" style="height:240px" alt=""/>

                    <span class="paddd"> {{ $estate->center }}  <i class="fas fa-map-marker-alt"></i></span>
                    <span> {{ $estate->neighborhood }} <i class="fas fa-map-marker-alt"></i> </span>
                    
                    @unless($estate->advertiser == null)
                    <span>{{ $estate->advertiser->advertiser_name }}<i class="fas fa-user-circle"></i>  </span>
                
                    @endunless
                    <span><a href="{{ route('estates.edit', [$estate->ad_sort_id, $estate->name]) }}" @if($estate->visible == 1) style="pointer-events: none;cursor: default;opacity:0.7" @endif >تعديل</a></span>
                    <span>
                        <form action="{{ route('estates.destroy', $estate->name) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">حذف</button>
                        </form>
                    </span>
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