<div class="mobile">
    
    <div id="myNav" class="overlay visible-xs">
        <a href="javascript:void(0)" class="closebtn" onclick="closenav()">
            <i class="far fa-times-circle"></i>
        </a>
        <div class="overlay-content">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ url('main/images/services.png') }}"> خدماتنا </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/loction.png') }}"> فروعنا </a>
                            </li>
                            <li>
                                <a href="{{ route('clients') }}"><img src="{{ url('main/images/custmoer.png') }}"> عملائنا </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}"><img src="{{ url('main/images/portfolio.png') }}"> أعمالنا </a>
                            </li>
                            <li>
                                <a href="{{ route('teams') }}"><img src="{{ url('main/images/team.png') }}"> فريق العمل </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/money.png') }}"> الرسوم المالية </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/puy.png') }}"> طرق الدفع </a>
                            </li>
                            <li>  
                                <a href="{{ route('search') }}"><img src="{{ url('main/images/search.png') }}"> البحث </a>
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
                                <img src="{{ url('main/images/contact.png') }}">
                            </li>
                            <li>
                                <a href="{{ route('about') }}"> من نحن </a>
                                <img src="{{ url('main/images/how.png') }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#submod"> الاشتراك </a>
                                <img src="{{ url('main/images/sub.png') }}">
                            </li>
                            @guest
                            <li>
                                <a href="#" data-toggle="modal" data-target="#regmod"> تسجيل جديد </a>
                                <img src="{{ url('main/images/reg.png') }}">
                            </li>
                            <li>
                                <a href="#"  data-toggle="modal" data-target="#clientsmod"> دخول الاعضاء </a>
                                <img src="{{ url('main/images/loginaug.png') }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#makatbmod"> دخول المكاتب العقارية </a>
                                <img src="{{ url('main/images/about.png') }}">
                            </li>
                            <li>
                                <a href="{{ route('register') }}"> تسجيل الدخول </a>
                                <img src="{{ url('main/images/login.png') }}">
                            </li>
                            @endguest

                            @auth
                                <li>
                                    <a href="{{ route('home') }}">الصفحة الشخصية</a>
                                    <img src="{{ url('main/images/login.png') }}">
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
                        <div class="time-date">
                        <p>الخميس 17 محرم 1438 - 20 يناير 2018</p>
                        <img src="{{ url('main/images/date.png') }}">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">قائمة الخدمات التسويقية العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="tickets.html">قائمة الخدمات</a></li>
                        <li><a href="projects.html">الخدمات</a></li>
                        <li><a href="addauction.html">قائمة الخدمات</a></li>
                        <li><a href="details-aucations.html">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الخدمات العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الاضافات العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="international.html">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة البحث العقاري</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الخدمات الحكومية الالكترونية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="lawyer.html">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
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

<!-- navbar mobile s
<div class="nav-mob visible-xs">
<div id="wrapper" class="">
    <div class="overlay" style="display: none;"></div>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <div class="navnar-mobile">
                        <ul>
                            <li>
                                <a href="#"> خدماتنا </a>
                            </li>
                            <li>
                                <a href="#"> فروعنا </a>
                            </li>
                            <li>
                                <a href="#"> عملائنا </a>
                            </li>
                            <li>
                                <a href="#"> أعمالنا </a>
                            </li>
                            <li>
                                <a href="#"> فريق العمل </a>
                            </li>
                            <li>
                                <a href="#"> الرسوم المالية </a>
                            </li>
                            <li>
                                <a href="#"> طرق الدفع </a>
                            </li>
                            <li>  
                                <a href="#"> البحث </a>
                            </li>
                        </ul>
        </div>
    </nav>

    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
        <p>الأقسام والإعدادات</p>
    </button>
</div>
</div>-->



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
                                <img src="{{ url('main/images/contact.png') }}">
                            </li>
                            <li>
                                <a href="{{ route('about') }}"> من نحن </a>
                                <img src="{{ url('main/images/how.png') }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#submod"> الاشتراك </a>
                                <img src="{{ url('main/images/sub.png') }}">
                            </li>
                            @guest
                            <li>
                                <a href="#" data-toggle="modal" data-target="#regmod"> تسجيل جديد </a>
                                <img src="{{ url('main/images/reg.png') }}">
                            </li>
                            <li>
                                <a href="#"  data-toggle="modal" data-target="#clientsmod"> دخول الاعضاء </a>
                                <img src="{{ url('main/images/loginaug.png') }}">
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#makatbmod"> دخول المكاتب العقارية </a>
                                <img src="{{ url('main/images/about.png') }}">
                            </li>
                            <li>
                                <a href="{{ route('register') }}"> تسجيل الدخول </a>
                                <img src="{{ url('main/images/login.png') }}">
                            </li>
                            @endguest

                            @auth
                                <li>
                                    <a href="{{ route('home') }}">الصفحة الشخصية</a>
                                    <img src="{{ url('main/images/login.png') }}">
                                </li>
                            @endauth
                            <li>  
                                <a href="https://aqar1.lic2.com"> <img src="{{ url('main/images/home.png') }}"> </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="time-date">
                        <p>الخميس 17 محرم 1438 - 20 يناير 2018</p>
                        <img src="{{ url('main/images/date.png') }}">
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
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="far fa-user"></i>
                            </div>
                            <h2>أكتب الأسم   </h2>
                            <input type="text">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>أختر الدولة</h2>
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اختر المنطقة </h2>
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
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اسم الحي</h2>
                            <input type="text" placeholder="">
                        </div>
                        


                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text">
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" class="btn btn-default1">اشتراك</button>
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
            <form method="post" id="member-login" action="{{ route('login') }}">
                @csrf
                <p> ادخل رقم جوالك او الايميل او اسم المستخدم</p>
                <input type="text" name="email" class="form-control">
                <p>ادخل كلمة المرور</p>
                <input type="password" name="password" class="form-control">
                <div class="clearfix"></div>
                <div class="lastchek">
                    <div class="checkbox">
                        
                        <label>تذكرنى</label>
                        <input class="form-check-input" type="checkbox" name="remember" class="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <a href="#" class="fordid">هـل نسيت كلمة المرور؟</a>
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
            <button type="button" onclick="submitmemberloginone()" class="btn btn-default1">دخول</button>
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
            <form method="post" id="member-login-one" action="{{ route('login') }}">
                @csrf
                <p> ادخل رقم جوالك او الايميل او اسم المستخدم</p>
                <input type="text" name="email" class="form-control">
                <p>ادخل كلمة المرور</p>
                <input type="password" name="password" class="form-control">
                <div class="clearfix"></div>
                <div class="lastchek">
                    <div class="checkbox">
                        <label>تذكرنى</label>
                        <input class="form-check-input" type="checkbox" name="remember" class="remember" {{ old('remember') ? 'checked' : '' }}>
                    </div>
                    <a href="#" class="fordid">هـل نسيت كلمة المرور؟</a>
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
                    <form method="post" id="register" action="{{ route('register') }}">
                        @csrf
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
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        <div class="col-xs-12">
                            <div class="icon-con">
                                <i class="fa fa-user"></i>
                            </div>
                            <h2> اسم المستخدم</h2>
                            <input type="text" name="name">
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                            <h2>  كلمة المرور </h2>
                            <input type="password" name="password">
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-unlock-alt"></i>
                            </div>
                            <h2>   إعادة كلمة المرور </h2>
                            <input type="password" name="password_confirmation">
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text" name="email">
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>  تأكيد عنوان البريد الإلكترونى </h2>
                            <input type="text" name="email_confirmation">
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text" name="phone">
                        </div>

                        <div class="col-xs-12">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>

                        <div class="col-xs-12">
                            <div class="lastchek">
                            <div class="checkbox">
                                <label>أوافق على كافة الأحكام والشروط للموقع الإلكتروني والإلتزام بما جاء فيها    </label>
                                <input type="checkbox" name="accept" class="chekreg">
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
                    <form>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="far fa-user"></i>
                            </div>
                            <h2>أكتب الأسم   </h2>
                            <input type="text">
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h2>أختر الدولة</h2>
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اسم المنطقة </h2>
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
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h2>اختر الحي</h2>
                            <select>
                                <option value="volvo">الرياض</option>
                                <option value="saab">مصر</option>
                                <option value="mercedes">المغرب</option>
                                <option value="audi">الامارات</option>
                            </select>
                        </div>
                        


                        <div class="col-xs-12 col-sm-6">
                            <div class="icon-con">
                                <i class="fa fa-phone"></i>
                            </div>
                            <h2>رقم الجوال</h2>
                            <input type="text">
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <div class="icon-con">
                                <i class="fa fa-envelope "></i>
                            </div>
                            <h2>عنوان البريد الالكتروني</h2>
                            <input type="text">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
            <button type="button" class="btn btn-default1">اشتراك</button>
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
                                <a href="#"><img src="{{ url('main/images/services.png') }}"> خدماتنا </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/loction.png') }}"> فروعنا </a>
                            </li>
                            <li>
                                <a href="{{ route('clients') }}"><img src="{{ url('main/images/custmoer.png') }}"> عملائنا </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio') }}"><img src="{{ url('main/images/portfolio.png') }}"> أعمالنا </a>
                            </li>
                            <li>
                                <a href="{{ route('teams') }}"><img src="{{ url('main/images/team.png') }}"> فريق العمل </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/money.png') }}"> الرسوم المالية </a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ url('main/images/puy.png') }}"> طرق الدفع </a>
                            </li>
                            <li>  
                                <a href="{{ route('search') }}"><img src="{{ url('main/images/search.png') }}"> البحث </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- call us -->
                <div class="col-md-2 col-sm-12">
                    <div class="callus">
                        <a href="#"> <img src="{{ url('main/images/callus.png') }}"> </a>
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
                            <li> <a href="#"> <img src="{{ url('main/images/io.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/pl.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/mi.png') }}"> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="social-media">
                        <ul>
                            <li> <a href="#"> <img src="{{ url('main/images/te.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/fb.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/tw.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/in.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/yo.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/li.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/go.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/wh.png') }}"> </a> </li>
                            <li> <a href="#"> <img src="{{ url('main/images/sn.png') }}"> </a> </li>
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">قائمة الخدمات التسويقية العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="tickets.html">قائمة الخدمات</a></li>
                        <li><a href="projects.html">الخدمات</a></li>
                        <li><a href="addauction.html">قائمة الخدمات</a></li>
                        <li><a href="details-aucations.html">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الخدمات العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الاضافات العقارية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="international.html">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة البحث العقاري</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> قائمة الخدمات الحكومية الالكترونية</a>
                    <ul class="dropdown-menu dropdown-menu-list">
                        <li><a href="lawyer.html">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                        <li><a href="#">قائمة الخدمات</a></li>
                        <li><a href="#">الخدمات</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
</div> <!-- header -->