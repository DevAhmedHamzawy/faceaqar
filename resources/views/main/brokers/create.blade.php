@extends('main.layouts.app')

@section('title') إضافة وسيط جديد   @endsection

@section('content')

<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>بيانات التسجيل في وسيط واجهة العقار الالكتروني</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <form id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('brokers.store') }}" >
                    @csrf
                    <div id="rootwizard">
                        
                            <div class="tab-pane" id="rootwizard">
                                <h4> بيانات التواصل </h4>
                                <div class="block_form_1 row">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for=""> اختر اسم الدولة <em>*</em></label>
                                        </div>
                                        <div class="col-md-10">
                                            <select class="form-control selectOption required" onchange="getCities(this);" required>
                                                @foreach ($areas as $area)
                                                    <option value="{{ $area->name }}">{{ $area->name }}</option>
                                                @endforeach
                                            </select>											
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""> اختر اسم المنطقة <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control selectOption required" id="cities" onchange="getSubCities(this);" required>
                                                <option>اختر المنطقة</option>
                                               
                                            </select>											
                                        </div>
                                        <div class="col-md-2">
                                            <label for=""> اختر اسم المدينة  <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control selectOption required" name="area_id" id="area_id" onchange="setMap(this);" required>
                                                <option>اختر المدينة</option>
                                            </select>													
                                        </div>
                                    </div>
                                    
                                </div>
                                
                    </div>
                    
                    <h4> بيانات الإعلان </h4>
                        <div class="form-group broker_form_new_style">
                            <label for="">اختر نوع الإعلان في صفحة وسيط واجهة العقار الالكتروني <em>*</em> </label>
                            <Select id="optselector" name="broker_ad_sort">
                            <option selected disabled>أختر</option>
                            <option value="photosel">صور</option>
                            <option value="textopt">كتابة نصية</option>
                            <option value="socialopt">حسابات التواصل الاجتماعي</option>
                            <option value="advcartopt">الكروت الاعلانية الالكترونية</option>
                            <option value="mediaopt"> حجز صفحة اعلانية كاملة  </option>
                            </Select>
                        </div>

                        @include('main.brokers.includes.images')
                        @include('main.brokers.includes.text')
                        @include('main.brokers.includes.social_accounts')
                        @include('main.brokers.includes.e_ad_cards')
                        @include('main.brokers.includes.e_ad_page')
                        

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection


@section('footer')
    <script>
        $(function() {
                $('#optselector').change(function(){
                    $('.optitem').hide();
                    $('#' + $(this).val()).show();
                });
            });



            function initMap(lat = null, lng = null) {
    
    if(lat == null){ var myLatLng = {lat: 24.774265, lng: 46.738586} } else{ var myLatLng = {lat, lng} } ;
 
   var map = new google.maps.Map(document.getElementById('map'), {
     center: myLatLng,
     zoom: 13
   });
 
   var marker = new google.maps.Marker({
         position: myLatLng,
         map: map,
         title: 'Hello World!',
         draggable: true
       });
 
    google.maps.event.addListener(marker, 'dragend', function(marker) {
       var latLng = marker.latLng;
       document.getElementById('latlng').value = [latLng.lat(),latLng.lng()];
    });
    }


    function setMap(item)
    {
       let lat = $('option:selected', item).data("lat");
       let lng = $('option:selected', item).data("lng");
       initMap(Math.floor(lat), Math.floor(lng));
    }
    

   
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk" async defer></script>
@endsection