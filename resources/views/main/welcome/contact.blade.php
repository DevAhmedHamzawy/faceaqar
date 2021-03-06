 <!-- contact us -->
 <div class="contactus">
    <div class="container">
        <h1 class="tit-las con-tit">اتصل بنا</h1>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="right-con">
                    <img src="{{ url('main/images/logo.png') }}">
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
                        <p class="formob" style="margin:0">{{ $settings->address }}</p>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> ادارة الموقع </h4>
                        <a href="#" title="..."><p>{{ $settings->site_manager_phone }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> الخدمات التسويقية </h4>
                        <a href="#" title="..."><p>{{ $settings->marketing_services }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> الخدمات العقارية </h4>
                        <a href="#" title="..."><p>{{ $settings->estate_services }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> الخدمات الحكومية </h4>
                        <a href="#" title="..."><p>{{ $settings->government_services }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> الرقم الموحد  </h4>
                        <a href="#" title="..."><p>{{ $settings->unified_number }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="fas fa-mobile-alt"></i>
                        <h4> خدمة العملاء </h4>
                        <a href="#" title="..."><p>{{ $settings->customer_service }}</p></a>
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
                        <h4> صندوق البريد </h4>
                        <a href="#" title="..."><p>{{ $settings->postal_code }}</p></a>
                    </div>
                    <div class="item-info">
                        <i class="far fa-envelope"></i>
                        <h4> الرمز البريدي </h4>
                        <a href="#" title="..."><p>{{ $settings->postal_number }}</p></a>
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
                            <select onchange="getCitiesContact(this);">
                                @foreach ($areas as $area)
                                  <option value="{{ $area->name }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                               <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اختر المنطقة</h2>
                            <select id="cities_contact" onchange="getSubCitiesContact(this);">
                            
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>اختر المدينة</h2>
                            <select class="area_id_contact">
                              
                            </select>
                            <span id="area-id-contact-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12">
                            <div class="icon-con">
                                <i class="fa fa-user"></i>
                            </div>
                            <h2>الاسم</h2>
                            <input type="text" class="name">
                            <span class="name-contact-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text" class="mobile">
                            <span class="mobile-contact-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="email" class="email">
                            <span class="email-contact-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 ">
                            <div class="icon-con">
                                <i class="fa fa-bars"></i>
                            </div>
                            <h2>اختر نوع الخدمة الالكترونية</h2>
                            <select id="service_id">
                              <option value="0">اختر</option>
                              <option value="2">مصر</option>
                              <option value="3">المغرب</option>
                              <option value="4">الامارات</option>
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
                        <div class="col-xs-12">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        <button onclick="sendContact();return false;" class="btn">إرسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>