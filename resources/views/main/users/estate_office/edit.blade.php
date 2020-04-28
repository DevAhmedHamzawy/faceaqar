@extends('main.layouts.app')

@section('title') تعديل بياناتى @endsection

@section('content')
<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تعبئة بيانات لإضافة مكتب عقاري</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <h4>بيانات عنوان المكتب العقارى</h4>
                <form method="POST" action="{{ route('update-profile' , $user->name) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
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
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">  اسم المركز </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="center" value="{{ $user->profile->center ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">  اسم الحى <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="neighborhood" value="{{ $user->profile->neighborhood ?? '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">  اسم الشارع </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="street" value="{{ $user->profile->street ?? '' }}">
                            </div>
                            <div class="col-md-2">
                                <label for="">  العنوان التفصيلي  </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="address" value="{{ $user->profile->address ?? '' }}">
                            </div>
                        </div>
                    </div>
                    
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <h4>
                                    البيانات الشخصية لصاحب المكتب العقاري
                                    غير قابلة للنشر بناءاً على سياسة الخصوصية بالموقع	
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">  الاسم الرباعي    <em>*</em></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="full_name" value="{{ $user->profile->full_name ?? '' }}">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                @if($user->profile->national_identity_img != null)
                                <label for=""> صورة الهوية الوطنية </label>
                                @else
                                <label for="">ارفاق صورة الهوية الوطنية </label>
                                @endif
                            </div>
                            <div class="col-md-3">
                                @if($user->profile->national_identity_img != null)
                                    <img src="{{ $user->national_img_path }}" width="250" height="150" alt="" srcset="">
                                @else
                                    <input type="file" class="form-control" id="" name="national_img" placeholder="ارفاق صورة">
                                @endif
                            </div>
                            <div class="col-md-3">
                                @if($user->profile->commercial_register_img != null)
                                <label for=""> صورة السجل التجاري </label>
                                @else
                                <label for="">ارفاق صورة من السجل التجاري </label>
                                @endif
                            </div>
                            <div class="col-md-3">
                                @if($user->profile->commercial_register_img != null)
                                <img src="{{ $user->commercial_img_path }}" width="250" height="150" alt="" srcset="">
                                @else
                                <input type="file" class="form-control" id="" name="commercial_img" placeholder="ارفاق صورة">
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4> بيانات عن المكتب العقاري الالكتروني </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for=""> اسم المكتب العقاري <em>*</em></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="office_name" value="{{ $user->profile->office_name ?? '' }}">
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3">
                                <label for="">  نشاط المكتب العقاري </label>
                            </div>
                            <div class="col-md-9">
                            <textarea class="form-control required" name="office_activity" rows="4">{{ $user->profile->office_activity ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">  رقم الترخيص للسجل التجاري </label>
                            </div>
                            <div class="col-md-3">
                            <input type="number" class="form-control" name="commercial_register_no" value="{{ $user->profile->commercial_register_no ?? '' }}">
                            </div>
                            
                            <div class="col-md-3">
                                <label for=""> إضافة فيديو يوتيوب </label>
                            </div>
                            <div class="col-md-3">
                                <input type="url" class="form-control" name="youtube_video_link" value="{{ $user->profile->youtube_video_link ?? '' }}">
                            </div>
                        </div>
                    
                    <h4>انسخ الروابط الإلكترونية لحسابات التواصل الإجتماعي</h4>
                    <div class="social-media2">
                        <input type="url" class="form-control" name="facebook" value="{{ $user->profile->facebook ?? '' }}" placeholder="facebook">
                        <input type="url" class="form-control" name="twitter" value="{{ $user->profile->twitter ?? '' }}" placeholder="twitter">
                        <input type="url" class="form-control" name="youtube" value="{{ $user->profile->youtube ?? '' }}" placeholder="youtube">
                        <input type="url" class="form-control" name="instagram" value="{{ $user->profile->instagram ?? '' }}" placeholder="instagram">
                        <input type="url" class="form-control" name="whatsapp" value="{{ $user->profile->whatsapp ?? '' }}" placeholder="whatsapp">
                        <input type="url" class="form-control" name="snapchat" value="{{ $user->profile->snapchat ?? '' }}" placeholder="snapchat">

                        </div>
                        <div class="row">
                            <br/>
                    <h4>اكتب وصف أكثر عن نشاط المكتب العقاري</h4>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="6">{{ $user->profile->description ?? '' }}</textarea>
                    </div><br/></div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h4>ارفاق صور عن نشاط المكتب العقارى </h4>
                            <button class="btn btn-primary add-image" onclick="addImages();return false;">إضافة صور أخرى</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" name="userimages[]" class="form-control" id="" placeholder="">
                    </div>
                    <div class="images"></div>
                    <div class="images-danger text-center" style="margin-top:250px;display:none;"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>حدد موقع المكتب العقارى الجغرافي على مخطط ماب</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" style="height:550px;"></div>
                            <input type="hidden" name="latlng" id="latlng" />
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> بيانات المعلن </h4>
                            </div>
                        </div>
                                <div class="block_form_1">
                            <div class="col-md-2">
                                <label for="">اســم المعلن <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label>اختر نوع المعلن <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control required">
                                    <option selected>مكتب عقاري</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="">(1) رقــم الجوال <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="mobile1" value="{{ $user->profile->mobile1 ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">(2) رقــم الجوال </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="mobile2" value="{{ $user->profile->mobile2 ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">التلفون</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="telephone" value="{{ $user->profile->telephone ?? '' }}">
                            </div>
                    
                            <div class="col-md-2">
                                <label for="">فاكس</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="fax" value="{{ $user->profile->fax ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">سنترال</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="central" value="{{ $user->profile->central ?? '' }}">
                            </div>
                    
                            <div class="col-md-2">
                                <label for="">البريد الإلكتروني</label>
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control required" name="email" value="{{ $user->profile->email ?? '' }}">
                            </div>
                            

                            <div class="col-md-2">
                                <label for="">الموقع  الإلكترونى</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="website" value="{{ $user->profile->website ?? '' }}">
                            </div>

                            
                            
                            <div class="clearfix"></div>         
                            <div class="col-md-4 hidden-xs"></div>
                            <div class="col-md-4 add-code">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            
                            <div class="col-md-3 hidden-xs"></div>
                            <div class="col-md-12">
                                <div class="checkbox form-group Terms_line text-right">
                                <label>
                                    <input type="checkbox">
اوافق على كافة الأحكام والشروط للموقع الإلكتروني والإلتزام بما جاء فيها.
                                </label>
                            </div>
                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-default btn_web">حفظ</button>
                                                    <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                                                </div>
                                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection


@section('footer')
    <script type="text/javascript">
       

       function addImages(){
            //console.log($('.images').find('.form-group').length);
             
            if($('.images').find('.form-group').length < 4){
                $('.images').append('<div class="form-group"><input type="file" name="userimages[]" class="form-control" id="" placeholder=""></div>');
            }else{
                $('.images-danger').css('display', 'block');
                $('.images-danger').append('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم تجاوز الحد الأقصى من الصور !</div></div>');
                setTimeout(() => {
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove() 
                    });
                }, 2000);
            }
        }

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