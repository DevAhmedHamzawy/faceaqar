@extends('main.layouts.app')

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
        <div class="">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تفاصيل المكتب العقارى</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <!-- content_details_real -->
            <div class="content_details_real">
                <div class="block_ads_local block_time bord_small">
                    <div class="row">
                        <div class="col-sm-3 col-xs-12  padd_left">
                            <span>
                                <strong> كود الإعلان </strong> {{ $user->profile->code }}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> تاريخ الإضافة </strong> : &nbsp; <i class="far fa-clock"></i> {{ $user->create_at }}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> أخر تحديث </strong> : <i class="far fa-calendar-alt"></i> {{ $user->update_at }}&nbsp;
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_right">
                            <span>
                                <strong> عدد المشاهدات : </strong> <i class="fa fa-eye"></i>{{ $views }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="block_ads_local bord_small">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 padd_left">
                            <span class="color_blue">
                                {{ $user->profile->office_name ?? '' }}
                            </span>
                        </div>
                        <div class="col-sm-4 col-xs-12 padd_right">
                            <span class="color_blue">
                               {{ $user->profile->commercial_register_no ?? '' }}
                            </span>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                            <span class="color_blue">
                            {{ $user->roles->first()->display_name  }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="block_ads_local bord_small">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12 padd_left">
                            <span class="color_blue blue2">
                                <i class="fa fa-map-pin"></i> {{ $user->profile->area->name ?? '' }} | 
                                <i class="fa fa-map-marker"></i> {{ $areaName ?? '' }}  |
                                <i class="fa fa-map"></i> {{ $user->profile->center }}  | 
                                <i class="fa fa-map-signs"></i> {{ $user->profile->neighborhood }} |
                                <i class="fa fa-map-pin"></i> {{ $user->profile->street }} 

</span>
                        </div>
                        <div class="col-sm-4 col-xs-12 padd_right">
                            <span class="color_blue">
                                {{ $user->profile->address }} 	<i class="fas fa-map-marked-alt"></i> 
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="block_ads_localnew">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="social-medianew">
                            <ul>
                                <li> <a href="{{ $user->profile->facebook }}"> <img src="{{ $header3[4]->icon_path }}">
                                </a> </li>
                                <li> <a href="{{ $user->profile->instagram }}"> <img src="{{ $header3[8]->icon_path }}"> </a> </li>
                                <li> <a href="{{ $user->profile->twitter }}"> <img src="{{ $header3[5]->icon_path }}"> </a> </li>
                                <li> <a href="{{ $user->profile->youtube }}"> <img src="{{ $header3[7]->icon_path }}"> </a> </li>
                                <li> <a href="{{ $user->profile->whatsapp }}"> <img src="{{ $header3[10]->icon_path }}"> </a> </li>
                                <li> <a href="{{ $user->profile->snapchat }}"> <img src="{{ $header3[11]->icon_path }}"> </a> </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>

                </div>
                        <div class="map_cont">
                    <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-8 " >
                         

                        @foreach ($user->images as $key=>$img)
                        <div class="mySlides">
                        <div class="numbertext">{{ $key+1 }} / {{ count($user->images) }}</div>
                            <img src="{{ $img }}" style="width:100%">
                        </div>
                    @endforeach
                   

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    

                    <div class="row">
                        
                        @foreach ($user->images as $key=>$img)
                            <div class="column">
                                <img class="demo cursor" src="{{ $img }}" style="width:100%" onclick="currentSlide({{$key+1}})" alt="{{ $user->name }}">
                            </div>   
                        @endforeach
                        
                       
                    </div>


                    </div>

            <div class="col-md-4 col-sm-12 col-xs-12 pull-left">
                            <iframe src="https://www.google.com/maps/embed/v1/place?q={{$user->profile->lat}},{{$user->profile->lng}}&amp;key=AIzaSyA2obCxpDHFCwyBJe7z5EyrBTgdI1vm8RE&center={{$user->profile->lat}},{{$user->profile->lng}}&zoom=6" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            <div class="block_ads_local block_time no-eff">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="">
                                            <i class="fa fa-eye"></i> معاينة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="javascript:void(0)" onclick="favourite()" id="favouriting" title="">
                                            <i class="{{ $user->favourite ? "fa fa-heart" : "far fa-heart" }}"></i> {{ $user->favourite ? "إلغاء المفضلة"  :  "مفضلة" }}
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
                

                <div class="service_text">
                    <h3>وصف اكثر عن النشاط العقاري </h3>
                    <p>{{ $user->profile->description }}</p>
                </div>
                <div class="tabel_details_rael">
                    <table class="table table-bordered">
                        <tbody class="table_oio">
                            <tr>
                                <th class="title_table" width="30%">شاهد المكتب العقاري على اليوتيوب </th>
                                <th class="title_table"><a href="{{ $user->profile->youtube }}"> <i class="fab fa-youtube"></i> </a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    <!-- https://www.codexworld.com/like-dislike-rating-system-jquery-ajax-php/ -->
                    <div class="row ">
                        
                        <div class="col-md-6 col-xs-12 visible-xs">
                            <div class="report">
                                <button type="submit" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                            </div>
                        </div>

                        <div class="col-md-6 col-xs-12 ">
                            <h4 class="rateing">تقييم المحتوى</h4>
                             <div class="rateing_icons d-flex flex-row justify-content-cente">
                                <div class="p-2"> 
                                    <i id="like1" onclick="like()" class="fa fa-thumbs-up"></i> <div id="like1-bs3"></div>
                                    <span id="likes">{{ count($user->likes) }}</span>
                                </div>
                                
                                <div class="p-2">
                                    <i id="dislike1" onclick="dislike()" class="fa fa-thumbs-down"></i> <div id="dislike1-bs3"></div>
                                    <span id="dislikes">{{ count($user->dislikes) }}</span>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-6 col-xs-12 hidden-xs">
                            <div class="report">
                                <button onclick="reportOffice()" class="btn btn-default btn_web btn_red"  data-toggle="modal" data-target="#report">الإبلاغ عن المحتوى</button>
                            </div>
                        </div>
                    </div>
                    @include('main.users.estate_office.includes.contact')

               {{-- <div class="realestate_number">
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                        <h3 class="number_real">عدد العقارات الخاصة بالمكتب العقاري = 200 عقار</h3>
                        </div>
                    </div>
                </div>

            <div class="block_ads_realestate">
                <div class="row">
                <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                                <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                            <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                                                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>

                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                            <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>
    
                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                                        <div class="col-sm-3 col-xs-12">
                        <div class="block_ads_local block_ads_inter " style="padding-bottom: 10px;">
                            <ul>
                                <li> كود الاعلان</li>
                                <li> تاريخ الاضافة </li>
                            </ul>
                            <a href="#" title="" class="bg_tt"> اسم العقار المحلي </a>
                            <ul class="otherul">
                                <li>نوع العقار <i class="fa fa-home"></i> </li>
                                <li class="qt3a2">  القطعة <i class="fas fa-building"></i> </li>
                                <li>   نوع العرض  <i class="far fa-gem"></i>   </li>
                            </ul>
                             
                             <ul>
                                <li> الغرف <i class="fas fa-bed"></i>
                                <li> الحمامات <i class="fas fa-bath"></i> </li>
                                <li> المساحة م2 </li>
                                <li> السعر <i class="fas fa-tag"></i>  </li>
                             </ul>
                             
                            <img src="images/pic_offer.jpg" class="img-responsive" alt=""/>

                            <span class="paddd">اسم الحى <i class="fas fa-map-marker-alt"></i></span>
                            <span>العنوان <i class="fas fa-map-marker-alt"></i> </span>
                            <span>اسم المعلن <i class="fas fa-user-circle"></i>  </span>
                        </div>
                    </div>
                    
</div>
            </div>--}}
            
            
            <!-- end_content_details_real -->
        </div>
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


        function reportOffice(){
            @auth
                let report = {
                    office_id: {!! $user->id !!},
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
            axios.post('../../check', {office_id: {!! $user->id !!}})
                .then((data) => {
                    if(data.data.length == 0){ window.checkuserlike = 0; }else{ window.checkuserlike = 1; }
                    axios.post('../../like', {office_id: {!! $user->id !!}})
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
            axios.post('../../check', {office_id: {!! $user->id !!}})
                .then((data) => {
                    if(data.data.length == 0){ window.checkuserdislike = 0; }else{ window.checkuserdislike = 1; }
                    axios.post('../../dislike', {office_id: {!! $user->id !!}})
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
            axios.post('../../favourites', {office_id: {!! $user->id !!}})
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