 <!-- footer -->
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="right-footer">
                    <div class="logo-footer"><a href="#" title="..."><img src="{{ url('main/images/logofooter.png') }}"></a></div>
                    <div class="social-footer">
                        <ul>
                            <li> <a href="{{ $settings->telegram }}"> <i class="far fa-paper-plane"></i> </a> </li>
                            <li> <a href="{{ $settings->facebook }}"> <i class="fab fa-facebook-f"></i>  </a> </li>
                            <li> <a href="{{ $settings->twitter }}"> <i class="fab fa-twitter"></i> </a> </li>
                            <li> <a href="{{ $settings->instagram }}"> <i class="fab fa-instagram"></i> </a> </li>
                            <li> <a href="{{ $settings->youtube }}"> <i class="fab fa-youtube"></i> </a> </li>
                            <li> <a href="{{ $settings->linkedin }}"> <i class="fab fa-linkedin-in"></i> </a> </li>
                            <li> <a href="{{ $settings->googleplus }}"> <i class="fab fa-google-plus-g"></i> </a> </li>
                            <li> <a href="{{ $settings->whatsapp }}"> <i class="fab fa-whatsapp"></i> </a> </li>
                            <li> <a href="{{ $settings->snapchat }}"> <i class="fab fa-snapchat-ghost"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="links-right-footer">
                        @foreach ($footerthreelinks as $link)
                            <div class="item-ri-footer">
                                <div class="icon-ri">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <a href="{{ route('pages.show-page', $link->page_id) }}">{{ $link->name }}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="down-apps">
                        <p>تعامل اسهل حمل تطبيقنا</p>
                        <a href="#" title="..."><img src="{{ $footer[0]->icon_path }}"></a>
                        <a href="#" title="..."><img src="{{ $footer[1]->icon_path }}"></a>
                        <a href="#" title="..."><img src="{{ $footer[2]->icon_path }}"></a>
                    </div>
                    <div class="barcode">
                        <p>بار كود الموقع</p>
                        <img src="{{ $footer[3]->icon_path }}">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="center-footer">
                    <h2> اشترك في النشرة التسويقية الالكترونية </h2>
                    <div id="success-message-footer"></div>
                    <form>
                         <input type="text" id="name-newsletter-footer" placeholder="اكتب الاسم ">
                         <span class="name-newsletter-footer-error invalid-feedback" role="alert"></span>
                         <select onchange="getCitiesFooter(this);">
                            <option value="0">اختر اسم الدولة</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->name }}">{{ $area->name }}</option>
                            @endforeach
                         </select>
                         <select id="cities-footer" onchange="getSubCitiesFooter(this);">
                           <option value="0">اختر اسم المنطقة</option>
                         </select>
                         <select id="area-id-newsletter-footer">
                           <option value="0">اختر اسم المدينة</option>
                           
                         </select>
                        <input type="text" id="neighborhood-newsletter-footer" placeholder="اسم الحي">
                        <span class="neighborhood-newsletter-footer-error invalid-feedback" role="alert"></span>
                        <input type="number" id="mobile-newsletter-footer" placeholder="رقم الجوال">
                        <span class="mobile-newsletter-footer-error invalid-feedback" role="alert"></span>
                        <input type="email" id="email-newsletter-footer" placeholder="البريد الالكتروني">
                        <span class="email-newsletter-footer-error invalid-feedback" role="alert"></span>
                        <button onclick="subscribefooter();return false;" class="btn">اشترك</button>
                    </form>
                    <div class="photo-cen">
                        <ul>
                            <div class="fir-ph">

                                @foreach($footer_payment as $footer)
                                <li> <img src="{{ $footer->icon_path }}"> </li>
                                @endforeach
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="left-footer">
                    <h2>روابط الموقع</h2>
                    <ul>
                        @foreach ($footeronelinks as $link)
                            <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="{{ route('pages.show-page', $link->page_id) }}">{{ $link->name }}</a> </li>                            
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="last-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="right-lasfo hidden-xs">
                    <ul>
                        @foreach ($footertwolinks as $link)
                            <li> <a href="{{ route('pages.show-page', $link->page_id) }}"> {{ $link->name }} </a> </li><span>/</span>                            
                        @endforeach
                        <li> <a href="#"> خريطة الموقع </a> </li>
                    </ul>
                </div>
                <div class="right-lasfo visible-xs">
                    <div class="links-right-footer">
                       
                        @foreach ($footertwolinks as $link)
                            <div class="item-ri-footer">
                                <div class="icon-ri">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <a href="{{ route('pages.show-page', $link->page_id) }}"> {{ $link->name }}  </a>
                            </div>                          
                        @endforeach
                       
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> خريطة الموقع </a>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-xs-12">
                <p> اخر تحديث للموقع <span>/</span> {{ $settings->last_update_hijri }}  <span>/</span> {{ $settings->last_update }}  </p>
                <p>جميع الحقوق محفوظة لموقع واجهة العقار الالكتروني 2020</p>
            </div>
        </div>
    </div>
</div>



<!-- Js Files -->
<script src="{{ asset('main/js/jquery.js') }}"></script>
<script src="{{ asset('main/js/bootstrap.js') }}"></script>
<script src="{{ asset('main/js/npm.js') }}"></script>
<script src="{{ asset('main/js/all.min.js') }}"></script>
<script src="{{ asset('main/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('main/js/script.js') }}"></script>
<script src="{{ asset('main/js/script2.js') }}"></script>
<script src="{{ asset('main/js/newsTicker.min.js') }}"></script>
<script src="{{ asset('main/js/smoothscroll.js') }}"></script>


<script type="text/javascript">
    var nt_example1 = $('.nt-example1').newsTicker({
        row_height: 45,
        max_rows: 1,
        duration: 4000,
    });      
</script>

<script type="text/javascript">
    var elementPosition = $('#header-mob').offset();

    $(window).scroll(function () {
        if ($(window).scrollTop() > elementPosition.top) {
            $('#header-mob').css('position', 'fixed').css('top', '0');
             $('#header-mob').addClass('fixed-nav');
        } else {
            $('#header-mob').css('position', 'static');
        }
     });
</script>

<script>
function opennav() {
    document.getElementById("myNav").style.width = "270px";
     $('.mobile').css("right","-270px");
};

function closenav() {
    document.getElementById("myNav").style.width = "0%";
     $('.mobile').css("right","0");
} ;
    
function opensearch() {
    document.getElementById("mysearch").style.width = "270px";
     $('.mobile').css("right","-270px");
};

function closesearch() {
    document.getElementById("mysearch").style.width = "0%";
     $('.mobile').css("right","0");
} ;
    
function opencart() {
    document.getElementById("Mycart").style.width = "270px";
     $('.mobile').css("right","-270px");
};

function closecart() {
    document.getElementById("Mycart").style.width = "0%";
     $('.mobile').css("right","0");
} ;

function openopt() {
    document.getElementById("Myopt").style.width = "270px";
     $('.mobile').css("right","-270px");
};

function closeopt() {
    document.getElementById("Myopt").style.width = "0%";
     $('.mobile').css("right","0");
} ;
</script>

	<script type="text/javascript">
            $(function() {
                $('#optselector').change(function(){
                    $('.optitem').hide();
                    $('#' + $(this).val()).show();
                });
            });
        </script>
        <script type="text/javascript">
$('#mycheckbox').change(function() {
    $('#mycheckboxdiv').toggle();
});
</script>
        <script type="text/javascript">
$('#mycheckbox2').change(function() {
    $('#mycheckboxdiv2').toggle();
});
</script>


<script>
jQuery(document).ready(function () {
var trigger = jQuery('.hamburger'),
overlay = jQuery('.overlay'),
isClosed = false;

trigger.click(function () {
hamburger_cross();      
});

function hamburger_cross() {

if (isClosed == true) {          
overlay.hide();
trigger.removeClass('is-open');
trigger.addClass('is-closed');
isClosed = false;
} else {   
overlay.show();
trigger.removeClass('is-closed');
trigger.addClass('is-open');
isClosed = true;
}
}

jQuery('[data-toggle="offcanvas"]').click(function () {
jQuery('#wrapper').toggleClass('toggled');
jQuery("body").toggleClass("mobb");

});  






    
});


$('.newsticker').newsTicker();

</script>