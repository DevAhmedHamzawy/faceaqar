@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4 class="text-center">إضافة محامى جديد</h4></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('lawyers.store') }}">
                        @csrf



                        <div class="form-group row">
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

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">الإسم</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="full_name" class="col-md-2 col-form-label text-md-right">الإسم بالكامل</label>

                            <div class="col-md-10">
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-2 col-form-label text-md-right">الوصف</label>

                            <div class="col-md-10">
                                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="description">{{ old('description') }}</textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">العنوان</label>

                            <div class="col-md-10">
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="address">{{ old('address') }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">البريد الإلكترونى</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile1" class="col-md-2 col-form-label text-md-right">الجوال</label>

                            <div class="col-md-10">
                                <input id="mobile1" type="text" class="form-control @error('mobile1') is-invalid @enderror" name="mobile1" value="{{ old('mobile1') }}" required autocomplete="mobile1" autofocus>

                                @error('mobile1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telephone" class="col-md-2 col-form-label text-md-right">رقم الهاتف</label>

                            <div class="col-md-10">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="fax" class="col-md-2 col-form-label text-md-right">رقم الفاكس</label>

                            <div class="col-md-10">
                                <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}" required autocomplete="fax" autofocus>

                                @error('fax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-2 col-form-label text-md-right">الصورة الشخصية</label>
                            <div class="col-md-10">
                            <input type="file" name="image" class="form-control">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <h4>حدد موقع  المحامى  الجغرافي على مخطط ماب</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="map" style="height:550px;"></div>
                                <input type="hidden" name="latlng" id="latlng" />
                            </div>
                        </div>
    
                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">كلمة المرور</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        كلمة المرور تضاف للمحامى باعتبار انه سيدخل لوحة التحكم التى ستعرض له فقط الرسائل الخاصة به


                          

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                إضافة محامى جديد
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')

<script>
    
function getCities(item){
    axios.get('../../../areas/'+item.value)
        .then((data) => {
           $('#cities').empty()
           for(city of data.data){
           $('#cities').append('<option value="'+city.name+'" data-lat="'+city.latitude+'" data-lng="'+city.longitude+'">'+city.name+'</option>')
           }  
        })
    }


function getSubCities(item){
    initMap(item.lat,item.lng)
    axios.get('../../../areas/'+item.value)
        .then((data) => {
           $('#area_id').empty()
           for(subcity of data.data){
           $('#area_id').append('<option value="'+subcity.id+'" data-lat="'+subcity.latitude+'" data-lng="'+subcity.longitude+'">'+subcity.name+'</option>')
           }  
        })
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