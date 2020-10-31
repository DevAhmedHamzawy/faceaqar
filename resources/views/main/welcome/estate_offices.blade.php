<div class="container">
<!-- services of website -->
<div class="servic-title">
    <div class="container">
        <h1>الضفحات الإلكترونية للمكاتب العقارية</h1>
    </div>

    <div class="owl-carousel customers">


    @forelse ($estateOffices as $estate)
    <div>
        <div class="block_ads_local" >
           
               
                <a target="_blank" href="{{ route('profile', [$estate->name]) }}" title="" class="bg_tt"> {{ $estate->name }} </a>
            
           
            
               
            <img src="{{ $estate->main_img_path ?? url('main/images/pic_offer.jpg') }}" class="img-responsive" alt=""/>

          
        </div>
    </div>     
    @empty
    <h1 class="text-center">غير متاحة الان</h1>
    @endforelse
</div>

</div>
</div>