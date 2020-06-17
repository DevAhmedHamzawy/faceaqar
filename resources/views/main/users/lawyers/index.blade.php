@extends('main.layouts.app')

@section('title') محامى الموقع @endsection

@section('content')

<!-- local_page -->
<section id="local_page">
    <div class="container">
        <!-- title_pages -->
        <div class="title_pages">
            <h2>محامى الموقع</h2>
            <span></span>
        </div>
        <!-- end_title_pages -->

        <!-- service_icon -->
      

        <!-- realestate_blocks -->
        <div class="realestate_blocks">
            <!-- realestate_number -->
            <div class="realestate_number">
                <div class="row">
                    <div class="col-sm-3 col-xs-12">
                        <h3 class="number_real" style="margin-top: 10px;">عدد المحامين  = {{ count($lawyers) }} محامى</h3>
                    </div>
                </div>
            </div>
            <!-- end_realestate_number -->

            <!-- block_ads_realestate -->
            <div class="block_ads_realestate">
                <div class="row all-ads">
                    @forelse ($lawyers as $lawyer)
                    <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li>{{ $lawyer->profile->code ?? '' }}</li>
                                <li> {{ $lawyer->ago }} </li>
                            </ul>

                            <a href="{{ route('lawyers.show', [$lawyer->name]) }}" title=""   style="margin-top:0;"  class="bg_tt"> {{ $lawyer->name }} </a>
                            
                          
                                
                                
                            <img src="{{ $lawyer->main_img_path ?? url('main/images/pic_offer.jpg') }}" class="img-responsive" alt=""/>
                           
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

<div class="text-center">{{-- $lawyers->links() --}}</div>

@endsection