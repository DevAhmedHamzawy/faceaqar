@extends('main.layouts.app')

@section('title') {{ $estate->name }} @endsection

@section('header')

<style>
    .swal2-modal{
        width:600px !important;
        height: 200px;
    }

    #social-links ul li{
        display: inline;
        padding: 50px;
    }
</style>    
@endsection
@section('content')
    <!-- details_real -->
    <section id="details_real">
        <div class="container">
            <!-- title_pages -->
            <div class="title_pages">
                <h2> تفاصيل {{ $adSort->title }} </h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <!-- content_details_real -->
            <div class="content_details_real">
                <div class="block_ads_local block_time bord_small">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12  padd_left">
                            <span>
                                <strong> كود الإعلان </strong> {{ $estate->code }}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> تاريخ الإضافة </strong> : &nbsp; <i class="far fa-clock"></i> {{ $estate->create_at}}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> أخر تحديث </strong> : <i class="far fa-calendar-alt"></i> {{ $estate->update_at }}&nbsp;
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_right">
                            <span>
                                <strong> عدد المشاهدات : </strong> <i class="fa fa-eye"></i> {{ $views }} مشاهدة
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <span class="color_blue">
                                {{ $estate->name }}  
                            </span>
                        </div>
                    </div>
                </div>

                @if ($adSort->name != 'schema_estate')
                    <div class="block_ads_local bord_small">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12 padd_none ">
                                <span class="color_blue">
                                    <ul>
                                        <li>{{ $estate->category->name }} <i class="fa fa-home"></i> </li>
                                        <li class="qt3a2">{!! $sortName !!}<i class="fas fa-building"></i> </li>
                                        <li>   {!! $offerName !!}   <i class="far fa-gem"></i>   </li>

                                      

                                        @if($adSort->name == 'request_estate')
                                            
                                        <li>   {!! $estate->requestEstate->rooms_number !!}   <i class="fa fa-bed"></i>   </li>

                                        <li>   {!! $estate->requestEstate->bathrooms_number !!}   <i class="fa fa-bath"></i>   </li>

                                        <li>   {!! $estate->requestEstate->estate_space !!} م2     </li>

                                        <li>   {!! $estate->requestEstate->price !!}   <i class="fa fa-tag"></i>   </li>


                                        @endif
                                        


                                    </ul>
                                </span>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="block_ads_local bord_small">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 padd_left">
                            <span class="color_blue blue2">
                                <i class="fa fa-map-pin"></i> {{ $estate->area->name }} | 
                                <i class="fa fa-map-marker"></i> {{ $areaName }}  |
                                <i class="fa fa-map"></i> {{ $estate->center }}  | 
                                <i class="fa fa-map-signs"></i> {{ $estate->neighborhood }} |
                                <i class="fa fa-map-pin"></i> {{ $estate->street }} 
                            </span>
                        </div>
                        <div class="col-sm-4 col-xs-12 padd_right">
                            <span class="color_blue">
                                {{ $estate->address }} 	<i class="fas fa-map-marked-alt"></i> 
                            </span>
                        </div>
                    </div>
                </div>

                <div class="map_cont">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-8">


                            @foreach ($estate->images as $key=>$img)
                                <div class="mySlides">
                                <div class="numbertext">{{ $key+1 }} / {{ count($estate->images) }}</div>
                                    <img src="{{ $img }}" style="width:100%">
                                </div>
                            @endforeach
                           

                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>

                            

                            <div class="row">
                                
                                @foreach ($estate->images as $key=>$img)
                                    <div class="column">
                                        <img class="demo cursor" src="{{ $img }}" style="width:100%" onclick="currentSlide({{$key+1}})" alt="{{ $estate->name }}">
                                    </div>   
                                @endforeach
                                
                               
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 pull-left">
                            <iframe src="https://www.google.com/maps/embed/v1/place?q={{$estate->lat}},{{$estate->lng}}&amp;key=AIzaSyA2obCxpDHFCwyBJe7z5EyrBTgdI1vm8RE&center={{$estate->lat}},{{$estate->lng}}&zoom=6" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            <div class="block_ads_local block_time no-eff">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="">
                                            <i class="fa fa-eye"></i> معاينة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="javascript:void(0)" onclick="favourite()" id="favouriting" title="">
                                            <i class="{{ $estate->favourite ? "fa fa-heart" : "far fa-heart" }}"></i> {{ $estate->favourite ? "إلغاء المفضلة"  :  "مفضلة" }}
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="" data-toggle="modal" data-target="#share">
                                            <i class="fa fa-share-square"></i> مشاركة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="#" onclick="window.print()" title="">
                                            <i class="fa fa-print"></i> طباعة
                                        </a>
                                    </div>
                                </div>
                            </div>	
                        </div>	
                    </div>	
                </div>	
                @if(!empty($localAuctionEstate))
                    @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')
                        @include('main.estates.includes.show.localauctionestatedata')
                    @endif

                    @if($adSort->name == 'auction_estate')
                        @include('main.estates.includes.show.auctionestatedata')
                    @endif
                @endif

                <div class="service_text">
                    <h3>وصف أكثر عن العقار</h3>
                    <p>{{ $estate->more_description }}</p>
                </div>

                <div class="tabel_details_rael">
                    <table class="table table-bordered">
                        <tbody class="table_oio">
                            <tr>
                                <th class="title_table" width="30%">شاهد المخطط العقاري على اليوتيوب </th>
                                <th class="title_table"><a href="{{ 'https://'.$estate->youtube }}"> <svg class="svg-inline--fa fa-youtube fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <i class="fab fa-youtube"></i> --> </a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-6 col-xs-12 visible-xs">
                        <div class="report">
                            <button onclick="reportEstate()" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12 ">
                        <h4 class="rateing">تقييم المحتوى</h4>
                        <div class="rateing_icons d-flex flex-row justify-content-cente">
                            <div class="p-2"> 
                                <i id="like1" onclick="like()" class="fa fa-thumbs-up"></i> <div id="like1-bs3"></div>
                                <span id="likes">{{ count($estate->likes) }}</span>
                            </div>
                            
                            <div class="p-2">
                                <i id="dislike1" onclick="dislike()" class="fa fa-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                <span id="dislikes">{{ count($estate->dislikes) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12 hidden-xs">
                        <div class="report">
                            <button onclick="reportEstate()" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                        </div>
                    </div>
                </div>

                @include('main.estates.includes.show.contact')

            </div>
            <!-- end_content_details_real -->
        </div>


       

    </section>
    <!-- end_details_real -->


    <div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              مشاركة الصفحة الإعلانية الإلكترونية
            </div>
            <div class="modal-body">

               
                {!! Share::currentPage()->facebook()->twitter()->linkedin()->whatsapp()->telegram() !!}
               
               
            </div>
              
          </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
        }
        </script>
@endsection


@section('footer')

+   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <script>


        function reportEstate(){
            @auth
                let report = {
                    estate_id: {!! $estate->id !!},
                }
            axios.post('../../reportestate', report)
                .then((data) => {

                    
                        $('.report').append('<div class="alert alert-success mt-3" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>تم الإبلاغ عن الإعلان .... إدارة الموقع ستراجع البلاغ المقدم!</div></div>');
                        setTimeout(() => {
                            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                $(this).remove() 
                            });
                        }, 2000);
                    
                }).catch((error) => {

                })
            @endauth
            @guest
                swalMessageIfUnauthenticated();
             @endguest
            }
        

      
        function sendMessage(){
           
            let message = {
                name: $('#name').val(),
                mobile: $('#mobile').val(),
                email: $('#email').val(),
                body: $('#body').val(),
                to: $("#to").val(),
            }

            axios.post('../../sendmessage', message)
                .then((data) => {
                    
                    $('#name').val("");
                    $('#mobile').val("");
                    $('#email').val("");
                    $('#body').val("");
                    $("#to").val("");


                    $('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> الرسالة قد تم إرسالها بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                    }, 2000);
                }).catch((error) => {

                })

                
        }


        function like(){
            @guest
                swalMessageIfUnauthenticated();
             @endguest
             @auth
            axios.post('../../check', {estate_id: {!! $estate->id !!}})
                .then((data) => {
                    if(data.data.length == 0){ window.checkuserlike = 0; }else{ window.checkuserlike = 1; }
                    axios.post('../../like', {estate_id: {!! $estate->id !!}})
                    .then((data) => {
                        $('#likes').html(parseInt($('#likes').html(), 10)+1)
                        if(checkuserlike != 0){
                            $('#dislikes').html(parseInt($('#dislikes').html(), 10)-1)
                        }
                    })
                })
                @endauth
           
        }


        function dislike(){
            @guest
                swalMessageIfUnauthenticated();
             @endguest
             @auth
            axios.post('../../check', {estate_id: {!! $estate->id !!}})
                .then((data) => {
                    if(data.data.length == 0){ window.checkuserdislike = 0; }else{ window.checkuserdislike = 1; }
                    axios.post('../../dislike', {estate_id: {!! $estate->id !!}})
                    .then((data) => {
                        $('#dislikes').html(parseInt($('#dislikes').html(), 10)+1)
                        if(checkuserdislike != 0){
                            $('#likes').html(parseInt($('#dislikes').html(), 10)-1)
                        }
                    })
                })
                @endauth
        }
       
        function favourite()
        {
            @guest
                swalMessageIfUnauthenticated();
             @endguest
             @auth
            axios.post('../../favourites', {estate_id: {!! $estate->id !!}})
                .then((data) => {
                    console.log(data.data)
                    if(data.data == 1){
                        $('#favouriting').empty() 
                        $('#favouriting').append('<i class="far fa-heart"></i> مفضلة')
                    }else{
                        $('#favouriting').empty() 
                        $('#favouriting').append('<i class="fa fa-heart"></i> إلغاء المفضلة')
                    }
                })   
                @endauth
        }

        function swalMessageIfUnauthenticated()
        {
            Swal.fire({
                    icon: 'error',
                    position: 'center',
                    type: 'error',
                    title: "تنبيه",
                    html:
                    '<h5>الرجاء تسجيل الدخول أو الإنضمام للموقع</h5> <br/>' +
                    '<a class="btn btn-info" href="{{ route("login") }}">دخول الموقع</a> ' +
                    '<a class="btn btn-info" href="{{ route("register") }}">الإنضمام للموقع</a> ' +
                    '<a class="btn btn-info" onclick="swal.closeModal(); return false;">شكراً ... ربما لاحقاً</a> ',
                    showConfirmButton: false,
                   
                })
        }

    </script>
    
@endsection