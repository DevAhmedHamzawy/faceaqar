<div class="mobile">
    
    <div id="myNav" class="overlay visible-xs">
        <a href="javascript:void(0)" class="closebtn" onclick="closenav()">
            <i class="far fa-times-circle"></i>
        </a>
        <div class="overlay-content">
                        <ul>
                            <li>
                                <a href="{{ route('services') }}"><img src="{{ $header2[0]->icon_path }}"> خدماتنا </a>
                            </li>
                            <li>
                                <a href="{{ route('branches') }}"><img src="{{ $header2[1]->icon_path }}"> فروعنا </a>
                            </li>
                            <li>
                                <a href="{{ route('clients') }}"><img src="{{ $header2[2]->icon_path }}"> عملائنا </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}"><img src="{{ $header2[3]->icon_path }}"> أعمالنا </a>
                            </li>
                            <li>
                                <a href="{{ route('teams') }}"><img src="{{ $header2[4]->icon_path }}"> فريق العمل </a>
                            </li>
                            <li>
                                <a href="{{ route('financial_fees') }}"><img src="{{ $header2[5]->icon_path }}"> الرسوم المالية </a>
                            </li>
                            <li>
                                <a href="{{ route('payment_methods') }}"><img src="{{ $header2[6]->icon_path }}"> طرق الدفع </a>
                            </li>
                            <li>  
                                <a href="{{ route('search', 'general') }}"><img src="{{ $header2[7]->icon_path }}"> البحث </a>
                            </li>
                        </ul>
        </div>
    </div>
    
    <div id="Myopt" class="overlay visible-xs">
        <a href="javascript:void(0)" class="closebtn" onclick="closeopt()">
            <i class="far fa-times-circle"></i>
        </a>
        <div class="overlay-content">
                        <ul>
                            <li>
                                <a href="{{ route('contactus') }}"> اتصل بنا </a>
                                <img src="{{ $header1[7]->icon_path }}">
                            </li>
                            <li>
                                <a href="{{ route('about') }}"> من نحن </a>
                                <img src="{{ $header1[6]->icon_path }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#submod"> الاشتراك </a>
                                <img src="{{ $header1[5]->icon_path }}">
                            </li>
                            @guest
                            <li>
                                <a href="#" data-toggle="modal" data-target="#regmod"> تسجيل جديد </a>
                                <img src="{{ $header1[4]->icon_path }}">
                            </li>
                            <li>
                                <a href="#"  data-toggle="modal" data-target="#clientsmod"> دخول الاعضاء </a>
                                <img src="{{ $header1[3]->icon_path }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#makatbmod"> دخول المكاتب العقارية </a>
                                <img src="{{ $header1[2]->icon_path }}">
                            </li>
                            <li>
                                <a href="{{ route('login') }}"> تسجيل الدخول </a>
                                <img src="{{ $header1[1]->icon_path }}">
                            </li>
                            @endguest

                            @auth
                                <li>
                                    <a href="{{ route('home') }}">الصفحة الشخصية</a>
                                    <img src="{{ url('main/images/login.png') }}">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل الخروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <img src="{{ url('main/images/logout.png') }}">
                                </li>
                            @endauth
                        </ul>
        </div>
    </div>
    
    <div id="Mycart" class="overlay visible-xs">
        <a href="javascript:void(0)" class="closebtn" onclick="closecart()">
            <i class="far fa-times-circle"></i>
        </a>
        <div class="overlay-content">
                        <div class="time-date" style="color:#fff">
                        <p>{{ $hijridate }}</p>
                        <img src="{{ $header1[8]->icon_path }}">
                    </div>
        </div>
    </div>
    
    <div id="mysearch" class="overlay visible-xs">
        <a href="javascript:void(0)" class="closebtn" onclick="closesearch()">
            <i class="far fa-times-circle"></i>
        </a>
        <div class="overlay-content">
            
            <ul class="first-top-list">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">أنواع العقارات</a>
                        <ul class="dropdown-menu dropdown-menu-list">
                           
                            <li> <a href="{{ route('estates-list', 'local_estate') }}"> العقارات المحلية </a> </li>
                            <li><a href="{{ route('estates-list', 'global_estate') }}"> العقارات الدولية </a></li>
                            <li><a href="{{ route('estates-list', 'project_estate') }}"> المشاريع العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'auction_estate') }}"> المزادات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'request_estate') }}"> الطلبات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'schema_estate') }}"> المخططات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'office_estate') }}"> المكاتب العقارية الإلكترونية </a></li>
                        
                        </ul>
                </li>

                @foreach ($menuonelinks as $link)

                    <li class="dropdown">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $link->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-list">
                           
                            @foreach ($link->children as $child)
                                <li><a href="{{ route('pages.show-page', $child->page_id) }}">{{ $child->name }}</a></li>
                            @endforeach
                           
                        </ul>
                    </li>

                @endforeach
            </ul>             
                        
        </div>
    </div>


<header id="header-mob" class="visible-xs" style="position: static;">
<div class="container">
    <div class="row">
        <div class="col-xs-3">
            <div class="cart-mob">
                <span onclick="opencart()">
                    <i class="fas fa-calendar-alt"></i>
                </span>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="search-mob">
                <span onclick="opensearch()">
                    <i class="fas fa-search-location"></i>
                </span>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="home-mob">
                <a href="http://aqar1.lic2.com/">  <i class="fas fa-home"></i> </a>
            </div>
        </div>
        <div class="col-xs-3">
                <span onclick="openopt()">
                <i class="fas fa-wrench"></i>
            </span>
        </div>
        <div class="col-xs-3">
            <div class="navbarr-mob">
                <span onclick="opennav()">
                    <i class="fas fa-bars"></i>
                </span>
            </div>
        </div>
    </div>
</div>
</header>





<!-- header -->
<div class="header">
    
    <!-- top header -->
    <div class="top-header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 hidden-xs">
                    <div class="right-top-links">
                        <ul>
                            <li>
                                <a href="{{ route('contactus') }}"> اتصل بنا </a>
                                <img src="{{ $header1[7]->icon_path }}">
                            </li>
                            <li>
                                <a href="{{ route('about') }}"> من نحن </a>
                                <img src="{{ $header1[6]->icon_path }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#submod"> الاشتراك </a>
                                <img src="{{ $header1[5]->icon_path }}">
                            </li>
                            @guest
                            <li>
                                <a href="#" data-toggle="modal" data-target="#regmod"> تسجيل جديد </a>
                                <img src="{{ $header1[4]->icon_path }}">
                            </li>
                            <li>
                                <a href="#"  data-toggle="modal" data-target="#clientsmod"> دخول الاعضاء </a>
                                <img src="{{ $header1[3]->icon_path }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#makatbmod"> دخول المكاتب العقارية </a>
                                <img src="{{$header1[2]->icon_path }}">
                            </li>
                            <li>
                                <a href="{{ route('login') }}"> تسجيل الدخول </a>
                                <img src="{{ $header1[1]->icon_path }}">
                            </li>
                            @endguest

                            @auth
                                <li>
                                    <a href="{{ route('home') }}">الصفحة الشخصية</a>
                                    <img src="{{ url('main/images/login.png') }}">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">تسجيل الخروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <img src="{{ url('main/images/login.png') }}">
                                </li>
                            @endauth
                            <li>  
                                <a href="{{ url('/') }}"> <img src="{{ $header1[0]->icon_path }}"> </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="time-date">
                        <p>{{ $hijridate }}</p>
                        <img src="{{ $header1[8]->icon_path }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal login clients -->
    <div id="submod" class="modal modalaqar fade" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> الإشتراك فى النشرة التسويقية الإلكترونية </h4>
            </div>
            <div class="modal-body">
                <div class="row left-con">
                    <div id="success-message-head"></div>
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="far fa-user"></i>
                            </div>
                            <h2>أكتب الأسم   </h2>
                            <input id="name-newsletter-head-one" type="text">
                            <span class="name-newsletter-head-one-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>أختر الدولة</h2>
                            <select onchange="getCitiesNewsletterOne(this);">
                                @foreach ($areas as $area)
                                    <option value="{{ $area->name }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اختر المنطقة </h2>
                            <select id="cities-newsletter-one" onchange="getSubCitiesNewsletterOne(this);">
                               
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>اختر المدينة</h2>
                            <select id="area-id-newsletter-head-one">
                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اسم الحي</h2>
                            <input type="text" id="neighborhood-newsletter-head-one" placeholder="">
                            <span class="neighborhood-newsletter-head-one-error invalid-feedback" role="alert"></span>

                        </div>
                        


                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text" id="mobile-newsletter-head-one">
                            <span class="mobile-newsletter-head-one-error invalid-feedback" role="alert"></span>

                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text" id="email-newsletter-head-one">
                            <span class="email-newsletter-head-one-error invalid-feedback" role="alert"></span>

                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" onclick="subscribeheaderone()" class="btn btn-default1">اشتراك</button>
            </div>
        </div>
    
        </div>
    </div>
    
    <!-- Modal makatb -->
    <div id="makatbmod" class="modal modalaqar fade" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> دخول المكاتب العقارية</h4>
            </div>
            <div class="modal-body">
            <form method="POST" id="member-login" action="{{ route('login') }}">
                @csrf
                <p> ادخل رقم جوالك او الايميل او اسم المستخدم</p>
                <input type="text" class="email-login form-control">
                <span class="email-login-error invalid-feedback" role="alert"></span>
                <p>ادخل كلمة المرور</p>
                <input type="password" class="password-login form-control">
                <span class="password-login-error invalid-feedback" role="alert"></span>
                <div class="clearfix"></div>
                <div class="lastchek">
                    <div class="checkbox">
                        
                        <label>تذكرنى</label>
                        <input class="form-check-input" type="checkbox" class="remember-login remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <a href="{{ route('password.request') }}" class="fordid">هـل نسيت كلمة المرور؟</a>
                </div>

            </form>
            
            <div class="register_by_social_media">
                <h3 class="text-center"> او سجل بواسطة  </h3>
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('social', 'facebook') }}" class="fb_001">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'twitter') }}" class="tw_001">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'google') }}" class="gb_001">
                            <i class="fab fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'linkedin') }}" class="link_001">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'instagram') }}" class="insta_001">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'google') }}" class="you_001">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" onclick="submitmemberlogin()" class="btn btn-default1">دخول</button>
                <button type="button" class="btn btn-default1 regs">تسجيل جديد</button>
            </div>
        </div>
    
        </div>
    </div>
    
    <!-- Modal login clients -->
    <div id="clientsmod" class="modal modalaqar fade" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> دخول الأعضاء</h4>
            </div>
            <div class="modal-body">
            <form method="POST" id="member-login-one" action="{{ route('login') }}">
                @csrf
                <p> ادخل رقم جوالك او الايميل او اسم المستخدم</p>
                <input type="text" class="email-one-login form-control">
                <span class="email-login-error invalid-feedback" role="alert"></span>
                <p>ادخل كلمة المرور</p>
                <input type="password" class="password-one-login form-control">
                <span class="password-login-error invalid-feedback" role="alert"></span>
                <div class="clearfix"></div>
                <div class="lastchek">
                    <div class="checkbox">
                        <label>تذكرنى</label>
                        <input class="form-check-input" type="checkbox" class="remember-one-login remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <a href="{{ route('password.request') }}" class="fordid">هـل نسيت كلمة المرور؟</a>
                </div>

            </form>
            
            <div class="register_by_social_media">
                <h3 class="text-center"> او سجل بواسطة  </h3>
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('social', 'facebook') }}" class="fb_001">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'twitter') }}" class="tw_001">
                            <i class="fab fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'google') }}" class="gb_001">
                            <i class="fab fa-google-plus" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'linkedin') }}" class="link_001">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'instagram') }}" class="insta_001">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('social', 'google') }}" class="you_001">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" onclick="submitmemberonelogin()" class="btn btn-default1">دخول</button>
                <button type="button" class="btn btn-default1 regs">تسجيل جديد</button>
            </div>
        </div>
    
        </div>
    </div>
    
    <!-- Modal login clients -->
    <div id="regmod" class="modal modalaqar fade" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> تسجيل جديد </h4>
            </div>
            <div class="modal-body">
                <div class="row left-con">
                    <form>
                        @csrf
                        <div class="col-xs-12">
                            <div class="icon-con">
                                <i class="fa fa-map"></i>
                            </div>
                            <h2>اختر الدولة</h2>
                            <select onchange="getCitiesRegister(this);">
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
                            <select id="cities-register" onchange="getSubCitiesRegister(this);">
                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>اختر المدينة</h2>
                            <select class="area-id-register" id="area-id-register">
                                
                            </select>
                            <span class="area-id-register-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12">
                            <div class="icon-con">
                                <i class="fa fa-user"></i>
                            </div>
                            <h2> اسم المستخدم</h2>
                            <input type="text" class="name-register">
                            <span class="name-register-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                            <h2>  كلمة المرور </h2>
                            <input type="password" class="password-register">
                            <span class="password-register-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                            <h2>   إعادة كلمة المرور </h2>
                            <input type="password" class="password-confirmation">
                            <span class="password-confirmation-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text" class="email-register">
                            <span class="email-register-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>  تأكيد عنوان البريد الإلكترونى </h2>
                            <input type="text" class="email-confirmation">
                            <span class="email-confirmation-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text" class="mobile-register">
                            <span class="mobile-register-error invalid-feedback" role="alert"></span>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12">

                       
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}

                            <span class="g-recaptcha-response-register-error invalid-feedback" role="alert"></span>

                        </div>

                        <div class="col-xs-12">
                            <div class="lastchek">
                            <div class="checkbox">
                                <label>أوافق على كافة الأحكام والشروط للموقع الإلكتروني والإلتزام بما جاء فيها    </label>
                                <input type="checkbox" name="accept" class="accept chekreg">
                                <span class="accept-terms-register-error invalid-feedback" role="alert"></span>
                            </div>
                            </div>
                            
                        </div>
                            
                    </form>
                </div>

                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" onclick="submitregister()" class="btn btn-default1">تسجيل الأن</button>
            </div>
        </div>
    
        </div>
    </div>
    
    <!-- Modal login clients -->
    <div id="submod" class="modal modalaqar fade" role="dialog">
        <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"> الإشتراك فى النشرة التسويقية الإلكترونية </h4>
            </div>
            <div class="modal-body">
                <div class="row left-con">
                    <div id="success-message-head"></div>
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="far fa-user"></i>
                            </div>
                            <h2>أكتب الأسم   </h2>
                            <input type="text" id="name-newsletter-head-two">
                            <span class="name-newsletter-head-two-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>أختر الدولة</h2>
                            <select onchange="getCitiesNewsletterTwo(this);">
                                @foreach ($areas as $area)
                                    <option value="{{ $area->name }}">{{ $area->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اسم المنطقة </h2>
                            <select id="cities-newsletter-two" onchange="getSubCitiesNewsletterTwo(this);">
                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>اختر المدينة</h2>
                            <select id="area-id-newsletter-head-two">
                                
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اختر الحي</h2>
                            <input type="text" id="neighborhood-newsletter-head-two">
                            <span class="neighborhood-newsletter-head-two-error invalid-feedback" role="alert"></span>
                        </div>
                        


                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text" id="mobile-newsletter-head-two">
                            <span class="mobile-newsletter-head-two-error invalid-feedback" role="alert"></span>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text" id="email-newsletter-head-two">
                            <span class="email-newsletter-head-two-error invalid-feedback" role="alert"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" onclick="subscribeheadertwo()" class="btn btn-default1">اشتراك</button>
            </div>
        </div>
    
        </div>
    </div>
    
    <!-- header logo and nav -->
    <div class="logo-nav">
        <div class="container">
            <div class="row">
                
                <!-- logo -->
                <div class="col-md-4 col-sm-12">
                    <div class="logo">
                        <a href="https://aqar1.lic2.com"> <img src="{{ url('main/images/logo.png') }}"> </a>
                    </div>
                </div>
                
                <!-- navbar -->
                <div class="col-md-6 col-sm-12 hidden-xs">
                    <div class="navbar-header">
                        <ul>
                            <li>
                                <a href="{{ route('services') }}"><img src="{{ $header2[0]->icon_path }}"> خدماتنا </a>
                            </li>
                            <li>
                                <a href="{{ route('branches') }}"><img src="{{ $header2[1]->icon_path }}"> فروعنا </a>
                            </li>
                            <li>
                                <a href="{{ route('clients') }}"><img src="{{ $header2[2]->icon_path }}"> عملائنا </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}"><img src="{{ $header2[3]->icon_path }}"> أعمالنا </a>
                            </li>
                            <li>
                                <a href="{{ route('teams') }}"><img src="{{ $header2[4]->icon_path }}"> فريق العمل </a>
                            </li>
                            <li>
                                <a href="{{ route('financial_fees') }}"><img src="{{ $header2[5]->icon_path }}"> الرسوم المالية </a>
                            </li>
                            <li>
                                <a href="{{ route('payment_methods') }}"><img src="{{ $header2[6]->icon_path }}"> طرق الدفع </a>
                            </li>
                            <li>  
                                <a href="{{ route('search', 'general') }}"><img src="{{ $header2[7]->icon_path }}"> البحث </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- call us -->
                <div class="col-md-2 col-sm-12">
                    <div class="callus">
                        <a href="#"> <img src="{{ $header2[8]->icon_path }}"> </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    <!-- social media -->
    <div class="social">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="and-ios">
                        <ul>
                            <li> <a href="#"> <img src="{{ $header3[0]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[1]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[2]->icon_path }}"> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="social-media">
                        <ul>
                            <li> <a href="#"> <img src="{{ $header3[3]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[4]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[5]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[6]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[7]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[8]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[9]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[10]->icon_path }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ $header3[11]->icon_path }}"> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- list navbar -->
    <div class="last-navbar hidden-xs">
        <div class="container">
            <ul class="first-top-list">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">أنواع العقارات</a>
                        <ul class="dropdown-menu dropdown-menu-list">
                           
                            <li> <a href="{{ route('estates-list', 'local_estate') }}"> العقارات المحلية </a> </li>
                            <li><a href="{{ route('estates-list', 'global_estate') }}"> العقارات الدولية </a></li>
                            <li><a href="{{ route('estates-list', 'project_estate') }}"> المشاريع العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'auction_estate') }}"> المزادات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'request_estate') }}"> الطلبات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'schema_estate') }}"> المخططات العقارية </a></li>
                            <li><a href="{{ route('estates-list', 'office_estate') }}"> المكاتب العقارية الإلكترونية </a></li>
                        
                        </ul>
                </li>

                @foreach ($menuonelinks as $link)

                    <li class="dropdown">
                        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $link->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-list">
                           
                            @foreach ($link->children as $child)
                                <li><a href="{{ route('pages.show-page', $child->page_id) }}">{{ $child->name }}</a></li>
                            @endforeach
                           
                        </ul>
                    </li>

                @endforeach
               
                
            </ul>
        </div>
    </div>
    
</div> <!-- header -->