<div class="container">
<!-- services of website -->
<div class="servic-title">
    <div class="container">
        <h1>الصفحات الإلكترونية للمزادات العقارية </h1>
    </div>

    <div class="owl-carousel customers">


    @forelse ($auctionEstates as $estate)
    <div>
        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
           
                <ul>
                    <li>{{ $estate->code }}</li>
                    <li> {{ $estate->ago }} </li>
                </ul>
               
                <a target="_blank" href="{{ route('estates.show', [$estate->ad_sort_id, $estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
            
            <ul class="otherul">
                @unless ($estate->category == null)
                    <li>{{ $estate->category->name ?? 'غير معروف' }}<i class="fa fa-home"></i> </li>
                @endunless
                <li class="qt3a"> {{ $estate->sortName ?? '' }} <i class="fas fa-building"></i> </li>
                <li>  {{ $estate->offerName ?? '' }}  <i class="far fa-gem"></i>   </li>
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

            <span class="paddd"> {{ $estate->center }}  <i class="fas fa-map-marker-alt"></i></span>
            <span> {{ $estate->neighborhood }} <i class="fas fa-map-marker-alt"></i> </span>
            
            @unless($estate->advertiser == null)
            <span>{{ $estate->advertiser->advertiser_name }}<i class="fas fa-user-circle"></i>  </span>

            @endunless
        </div>
    </div>     
    @empty
    <h1 class="text-center">غير متاحة الان</h1>
    @endforelse
</div>

</div>
</div>