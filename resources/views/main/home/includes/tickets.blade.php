<div class="ser-marketing">
    <div class="container">
        <div class="all-titles">
            <h2>تذاكرى المالية</h2>
            <p></p>
            <a href="#"></a>
        </div>
    </div>


    <!-- block_ads_realestate -->
    <div class="block_ads_realestate">
        <div class="row all-ads">
            @forelse (auth()->user()->tickets as $ticket)
            <div class="col-sm-3 col-xs-12">
                <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                    <ul>
                        <li> {{ $ticket->created_at->diffForHumans() }} </li>
                    </ul>
                    <a href="{{ route('show-ticket',  $ticket->id) }}" title="" class="bg_tt"> {{ $ticket->payment['name'] ?? 'غير محدد الإسم' }} </a>
                    
                        
                       
                        
                    <img src="{{ $ticket->img_path }}" class="img-responsive" style="height:240px" alt=""/>

                   
                </div>
            </div>
            @empty
            <h1 class="text-center">لم تقم بإضافة أى تذكرة مالية </h1>     
            @endforelse
        </div>
        <!-- end_block_ads_realestate -->
    </div>
    <!-- end_realestate_blocks -->

</div>