@extends('main.layouts.app')

@section('content')
    <!-- contact_us_page -->
        <!-- contact us -->
        <div class="contactus">
            <div class="container">
            <div class="title_pages">
					<h2>  اتصل بنا </h2>
			</div>
                <h1 class="tit-las con-tit"></h1>
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="right-con">
                            <img src="images/rightcon.png">
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="276px" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="info-contact">
                            <h2 class="tit-info">معلومات التواصل</h2>
                            <div class="item-info">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4> العنوان </h4>
                                <p style="margin:0">{{ $settings->address }}</p>
                            </div>
                            <div class="item-info">
                                <i class="fas fa-phone"></i>
                                <h4> التلفون </h4>
                                <a href="#" title="..."><p>{{ $settings->telephone }}</p></a>
                            </div>
                            <div class="item-info">
                                <i class="fas fa-phone"></i>
                                <h4> السنترال </h4>
                                <a href="#" title="..."><p>{{ $settings->central }}</p></a>
                            </div>
                            <div class="item-info">
                                <i class="fas fa-fax"></i>
                                <h4> فاكس </h4>
                                <a href="#" title="..."><p>{{ $settings->fax }}</p></a>
                            </div>
                            <div class="item-info">
                                <i class="far fa-envelope"></i>
                                <h4> الرمز البريدي </h4>
                                <a href="#" title="..."><p>{{ $settings->postal_code }}</p></a>
                            </div>
                            <div class="item-info" style="border: 0">
                                <i class="far fa-envelope"></i>
                                <h4> البريد الالكتروني </h4>
                                <a href="#" title="..."><p>{{ $settings->email }}</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <h2 class="tit-info">تواصل معنا</h2>
                        <div class="row left-con">
                            <div id="success-message"></div>
                            <form>
                                <div class="col-xs-12">
                                    <div class="icon-con">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <h2>اختر الدولة</h2>
                                    <select>
                                      <option value="volvo">السعودية</option>
                                      <option value="saab">مصر</option>
                                      <option value="mercedes">المغرب</option>
                                      <option value="audi">الامارات</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="icon-con">
                                       <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <h2>اختر المنطقة</h2>
                                    <select>
                                      <option value="volvo">الرياض</option>
                                      <option value="saab">مصر</option>
                                      <option value="mercedes">المغرب</option>
                                      <option value="audi">الامارات</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="icon-con">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <h2>اختر المدينة</h2>
                                    <select class="area_id">
                                      <option value="0">الرياض</option>
                                      <option value="1">مصر</option>
                                      <option value="2">المغرب</option>
                                      <option value="3">الامارات</option>
                                    </select>
                                    <span class="area-id-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                <div class="col-xs-12">
                                    <div class="icon-con">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <h2>الاسم</h2>
                                    <input class="name" type="text">
                                    <span class="name-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="icon-con">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <h2>رقم الجوال</h2>
                                    <input class="mobile" type="text">
                                    <span class="mobile-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="icon-con">
                                        <i class="fa fa-envelope "></i>
                                    </div>
                                    <h2>عنوان البريد الالكتروني</h2>
                                    <input class="email" type="text">
                                    <span class="email-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                <div class="col-xs-12 ">
                                    <div class="icon-con">
                                        <i class="fa fa-bars"></i>
                                    </div>
                                    <h2>اختر نوع الخدمة الالكترونية</h2>
                                    <select class="service_id">
                                      <option value="0">اختر</option>
                                      <option value="1">مصر</option>
                                      <option value="2">المغرب</option>
                                      <option value="3">الامارات</option>
                                    </select>
                                    <span class="service-id-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                <div class="col-xs-12">
                                    <div class="icon-con">
                                        <i class="fa fa-image"></i>
                                    </div>
                                    <h2> ارفاق ملف </h2>
                                    <input id="file" type="file">
                                </div>
                                <div class="col-xs-12">
                                    <div class="icon-con">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <h2> اترك رسالة</h2>
                                    <textarea class="body"></textarea>
                                    <span class="body-contact-error invalid-feedback" role="alert"></span>
                                </div>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                                <button onclick="sendContact();return false;" class="btn">إرسال</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
	<!-- end_contact_us_page -->


	<!-- map -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>

		/*
		Map Settings

		*/

		// Map Markers
		var mapMarkers = [{
			address: "15 El-shaheed helmy kamal st. El-fath mousque-Heliopolies-Cairo-Egypt",
			html: "<strong>Cairo Office</strong><br>15 El-shaheed helmy kamal st. El-fath mousque-Heliopolies-Cairo-Egypt",
			icon: {
				image: "img/pin.png",
				iconsize: [26, 46],
				iconanchor: [12, 46]
			},
			popup: true
		}];

		// Map Initial Location
		var initLatitude = 31.3160162;
		var initLongitude = 80.094827;

		// Map Extended Settings
		var mapSettings = {
			controls: {
				draggable: (($.browser.mobile) ? false : true),
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: true,
				streetViewControl: true,
				overviewMapControl: true
			},
			scrollwheel: false,
			markers: mapMarkers,
			latitude: initLatitude,
			longitude: initLongitude,
			zoom: 16
		};

		var map = $("#googlemaps").gMap(mapSettings);

		// Map Center At
		var mapCenterAt = function(options, e) {
			e.preventDefault();
			$("#googlemaps").gMap("centerAt", options);
		}






       
	</script>
@endsection



@section('footer')


 <script>
  window.form_data = new FormData();

$(document).on('change','#file',function(e){

let file_data = $('#file').prop('files')[0];
form_data.append('file', file_data);


});


function sendContact(){
    form_data.append('area_id', $(".area_id").val())
    form_data.append('name', $(".name").val())
    form_data.append('mobile', $(".mobile").val())
    form_data.append('email', $(".email").val())
    form_data.append('service_id', $(".service_id").val())
    form_data.append('body', $(".body").val())

    axios.post('../../sendcontact', form_data)
                .then((data) => {
                    $('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> الرسالة قد تم إرسالها بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                    }, 2000);
                }).catch((error) => {
                    if(error.response.data.errors.area_id){
                    $('.area-id-contact-error').append('<strong>'+error.response.data.errors.area_id+'</strong>');
                    $('.area-id-contact').addClass('is-invalid')
                }
                if(error.response.data.errors.name){
                    $('.name-contact-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name').addClass('is-invalid')
                }
                if(error.response.data.errors.email){
                    $('.email-contact-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email').addClass('is-invalid')
                }
                if(error.response.data.errors.mobile){
                    $('.mobile-contact-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                    $('.mobile').addClass('is-invalid')
                }
                if(error.response.data.errors.body){
                    $('.body-contact-error').append('<strong>'+error.response.data.errors.body+'</strong>');
                    $('.body').addClass('is-invalid')
                }
                });

}

 
 
 </script>
    
@endsection