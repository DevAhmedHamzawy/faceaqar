@extends('main.layouts.app')

@section('header')

<style>
    .swal2-modal{
        width:600px !important;
        height: 200px;
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
                                <strong> تاريخ الإضافة </strong> : &nbsp; <i class="far fa-clock"></i> {{ \Carbon\Carbon::parse($estate->create_at)->diffForHumans() }}
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_none">
                            <span>
                                <strong> أخر تحديث </strong> : <i class="far fa-calendar-alt"></i> sالخميس 17 محرم 1438&nbsp;
                            </span>
                        </div>
                        <div class="col-sm-3 col-xs-12 padd_right">
                            <span>
                                <strong> عدد المشاهدات : </strong> <i class="fa fa-eye"></i> s60 مشاهدة
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <span class="color_blue">
                                اسم {{ $adSort->title }}  
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
                                        <li class="qt3a2">{!! $sortName[0] !!}<i class="fas fa-building"></i> </li>
                                        <li>   {!! $offerName[0] !!}   <i class="far fa-gem"></i>   </li>
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
                        <div class="col-sm-12 col-xs-12 col-md-8 " >

                            <div class="mySlides">
                                <div class="numbertext">1 / 6</div>
                                <img src="images/cS-1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 6</div>
                                <img src="images/cS-2.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 6</div>
                                <img src="images/cS-3.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 6</div>
                                <img src="images/cS-1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">5 / 6</div>
                                <img src="images/cS-2.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">6 / 6</div>
                                <img src="images/cS-3.jpg" style="width:100%">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                            <a class="next" onclick="plusSlides(1)">❯</a>



                            <div class="row">
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-1.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                                </div>
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-2.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>    
                                <div class="column">
                                    <img class="demo cursor" src="images/cS-3.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
                                </div>   
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 pull-left">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27626.27366240017!2d31.35026109284309!3d30.057386886394237!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1485270685978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            <div class="block_ads_local block_time no-eff">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="">
                                            <i class="fa fa-eye"></i> معاينة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="#" title="">
                                            <i class="fa fa-save"></i> حفظ
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <a href="#" title="" data-toggle="modal" data-target="#share">
                                            <i class="fa fa-share-square"></i> مشاركة
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 padd_right no-eff">
                                        <a href="#" title="">
                                            <i class="fa fa-print"></i> طباعة
                                        </a>
                                    </div>
                                </div>
                            </div>	
                        </div>	
                    </div>	
                </div>	
            
                @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')
                    @include('main.estates.includes.show.localauctionestatedata')
                @endif

                @if($adSort->name == 'auction_estate')
                    @include('main.estates.includes.show.auctionestatedata')
                @endif

                <div class="service_text">
                    <h3>وصف أكثر عن العقار</h3>
                    <p>{{ $estate->description }}</p>
                </div>

                <div class="tabel_details_rael">
                    <table class="table table-bordered">
                        <tbody class="table_oio">
                            <tr>
                                <th class="title_table" width="30%">شاهد المخطط العقاري على اليوتيوب </th>
                                <th class="title_table"><a href="{{ $estate->youtube }}"> <svg class="svg-inline--fa fa-youtube fa-w-18" aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg><!-- <i class="fab fa-youtube"></i> --> </a></th>
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
                            </div>
                            
                            <div class="p-2">
                                <i id="dislike1" onclick="dislike()" class="fa fa-thumbs-down"></i> <div id="dislike1-bs3"></div>
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
@endsection


@section('footer')

+   <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>


        function reportEstate(){
            if(AuthUser){
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
            }else{
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
            axios.post('../../like', {estate_id: {!! $estate->id !!}})
                .then((data) => {

                })
        }


        function dislike(){
            axios.post('../../dislike', {estate_id: {!! $estate->id !!}})
                .then((data) => {

                })
        }
       

    </script>
    
@endsection