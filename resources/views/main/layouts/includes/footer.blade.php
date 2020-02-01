 <!-- footer -->
 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="right-footer">
                    <div class="logo-footer"><a href="#" title="..."><img src="{{ url('main/images/logofooter.png') }}"></a></div>
                    <div class="social-footer">
                        <ul>
                            <li> <a href="#"> <i class="far fa-paper-plane"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i>  </a> </li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-youtube"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-linkedin-in"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-google-plus-g"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-whatsapp"></i> </a> </li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a> </li>
                        </ul>
                    </div>
                    <div class="links-right-footer">
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> خدمات موقع واجهة العقار الالكتروني </a>
                        </div>
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> خدمات مكاتب واجهة العقار الالكتروني </a>
                        </div>
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> محامي موقع واجهة العقار الالكتروني </a>
                        </div>
                    </div>
                    <div class="down-apps">
                        <p>تعامل اسهل حمل تطبيقنا</p>
                        <a href="#" title="..."><img src="{{ url('main/images/appios.png') }}"></a>
                        <a href="#" title="..."><img src="{{ url('main/images/playand.png') }}"></a>
                        <a href="#" title="..."><img src="{{ url('main/images/winapp.png') }}"></a>
                    </div>
                    <div class="barcode">
                        <p>بار كود الموقع</p>
                        <img src="{{ url('main/images/barcode.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="center-footer">
                    <h2> اشترك في النشرة التسويقية الالكترونية </h2>
                    <div id="success-message-footer"></div>
                    <form>
                         <input type="text" id="name-newsletter-footer" placeholder="اكتب الاسم ">
                        <select>
                          <option value="0">اختر اسم الدولة</option>
                          <option value="1">مصر</option>
                          <option value="2">المغرب</option>
                          <option value="3">الامارات</option>
                        </select>
                         <select>
                           <option value="0">اختر اسم المنطقة</option>
                           <option value="1">مصر</option>
                           <option value="2">المغرب</option>
                           <option value="3">الامارات</option>
                         </select>
                         <select id="area-id-newsletter-footer">
                           <option value="0">اختر اسم المدينة</option>
                           <option value="1">مصر</option>
                           <option value="2">المغرب</option>
                           <option value="3">الامارات</option>
                         </select>
                        <input type="text" id="neighborhood-newsletter-footer" placeholder="اسم الحي">
                        <input type="number" id="mobile-newsletter-footer" placeholder="رقم الجوال">
                        <input type="email" id="email-newsletter-footer" placeholder="البريد الالكتروني">
                        <button onclick="subscribefooter();return false;" class="btn">اشترك</button>
                    </form>
                    <div class="photo-cen">
                        <ul>
                            <div class="fir-ph">
                                <li> <img src="{{ url('main/images/img123.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho2.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho3.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho4.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho5.png') }}"> </li>
                            </div>
                            <div class="fir-ph">
                                <li> <img src="{{ url('main/images/pho6.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho7.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho8.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho9.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho1.png') }}"> </li>
                            </div>
                            <div class="fir-ph">
                                <li> <img src="{{ url('main/images/pho10.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho11.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho12.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho13.png') }}"> </li>
                                <li> <img src="{{ url('main/images/pho14.png') }}"> </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="left-footer">
                    <h2>رابطة الموقع</h2>
                    <ul>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> معرفة الرسوم المالية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> طرق دفع الرسوم المالية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> انشاء التذكرة المالية رقم ١  </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> انشاء التذكرة المالية رقم 2  </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> شروط الخدمات التسويقية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> شروط الخدمات العقارية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> شروط الخدمات الحكومية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> روابط عقارية الكترونية </a> </li>
                        <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#"> القائمة السوداء </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="last-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="right-lasfo hidden-xs">
                    <ul>
                        <li> <a href="#"> سياسة الخصوصية </a> </li><span>/</span>
                        <li> <a href="#"> اتفاقية استخدام الموقع </a> </li><span>/</span>
                        <li> <a href="#"> خريطة الموقع </a> </li><span>/</span>
                        <li> <a href="#"> اسئلة واستفسارات </a> </li>
                    </ul>
                </div>
                <div class="right-lasfo visible-xs">
                                        <div class="links-right-footer">
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#">  سياسة الخصوصية </a>
                        </div>
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> اتفاقية استخدام الموقع </a>
                        </div>
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> خريطة الموقع </a>
                        </div>
                        <div class="item-ri-footer">
                            <div class="icon-ri">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <a href="#"> اسئلة واستفسارات </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <p> اخر تحديث للموقع <span>/</span> تاريخ هجري <span>/</span> تاريخ ميلادي </p>
                <p>جميع الحقوق محفوظة لموقع واجهة العقار الالكتروني 2018</p>
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






window.AuthUser = '{!! auth()->user() !!}'
    window.__auth = function () {
        try {
            return JSON.parse(AuthUser)
        } catch (error) {
            return null
        }
}


});

function submitregister(){
    let register = {
        area_id: $('.area-id-register').val(),
        name: $('.name-register').val(),
        password: $('.password-register').val(),
        password_confirmation: $('.password-confirmation').val(),
        email: $('.email-register').val(),
        email_confirmation: $('.email-confirmation').val(),
        mobile: $('.mobile-register').val(),
    }


    axios.post('../../register', register)
            .then((data) => {

            }).catch((error) => {
                $('.area-id-register-error').empty();
                $('.name-register-error').empty();
                $('.password-register-error').empty();
                $('.email-register-error').empty();
                $('.mobile-register-error').empty();
                console.log(error.response.data.errors);
                if(error.response.data.errors.area_id){
                    $('.area-id-register-error').append('<strong>'+error.response.data.errors.area_id+'</strong>');
                    $('.area-id-register').addClass('is-invalid')
                }
                if(error.response.data.errors.name){
                    $('.name-register-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name-register').addClass('is-invalid')
                }
                if(error.response.data.errors.email){
                    $('.email-register-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email-register').addClass('is-invalid')
                }
                if(error.response.data.errors.password){
                    $('.password-register-error').append('<strong>'+error.response.data.errors.password+'</strong>');
                    $('.password-register').addClass('is-invalid')
                }
                if(error.response.data.errors.mobile){
                    $('.mobile-register-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                    $('.mobile-register').addClass('is-invalid')
                }
                if(error.response.data.errors.recaptcha){
                    console.log(error.response.data.errors.recaptcha);
                    $('.g-recaptcha-response-register-error').append('<strong>'+error.response.data.errors.recaptcha+'</strong>');
                }
                
                if(error.response.data.errors.accept){
                    console.log(error.response.data.errors.accept);
                    $('.g-recaptcha-response-register-error').append('<strong>'+error.response.data.errors.accept+'</strong>');
                }
            })
    

}



function submitmemberlogin(){
    let login = {
       email: $('.email-login').val(),
       password: $('.password-login').val(),
       remember: $('.remember-login').val()
    }

    axios.post('../../login', login)
            .then((data) => {

            }).catch((error) => {
                $('.email-login-error').empty();
                $('.password-login-error').empty();
                if(error.response.data.errors.email){
                    $('.email-login-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email-login').addClass('is-invalid')
                }
                if(error.response.data.errors.password){
                    $('.password-login-error').append('<strong>'+error.response.data.errors.password+'</strong>');
                    $('.password-login').addClass('is-invalid')
                }
            })
    
}

function subscribeheaderone(){
    //console.log('subscribeheaderone');
    let newsletter = {
        name: $('#name-newsletter-head-one').val(),
        area_id: $('#area-id-newsletter-head-one').val(),
        neighborhood: $('#neighborhood-newsletter-head-one').val(),
        mobile: $('#mobile-newsletter-head-one').val(),
        email: $('#email-newsletter-head-one').val(),
    }

    axios.post('../../savenewsletter', newsletter)
            .then((data) => {

                $('#name-newsletter-head-one').val("");
                $('#area-id-newsletter-head-one').val("");
                $('#neighborhood-newsletter-head-one').val("");
                $('#mobile-newsletter-head-one').val("");
                $('#email-newsletter-head-one').val("");

                $('#success-message-head').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإشتراك!</strong>تم الإشتراك فى النشرة التسويقية !</div></div>');
                setTimeout(() => {
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove() 
                    });
                    $('#submod').modal('hide');
                }, 2000);


            });
}

function subscribeheadertwo(){
    //console.log('subscribeheadertwo');

    let newsletter = {
        name: $('#name-newsletter-head-two').val(),
        area_id: $('#area-id-newsletter-head-two').val(),
        neighborhood: $('#neighborhood-newsletter-head-two').val(),
        mobile: $('#mobile-newsletter-head-two').val(),
        email: $('#email-newsletter-head-two').val(),
    }

    axios.post('../../savenewsletter', newsletter)
      .then((data) => {

            $('#name-newsletter-head-two').val("");
            $('#area-id-newsletter-head-two').val("");
            $('#neighborhood-newsletter-head-two').val("");
            $('#mobile-newsletter-head-two').val("");
            $('#email-newsletter-head-two').val("");

            $('#success-message-head').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإشتراك!</strong>تم الإشتراك فى النشرة التسويقية !</div></div>');
            setTimeout(() => {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove() 
                });
            }, 2000);
        });
}

function subscribefooter(){
    //console.log('subscribefooter');

    let newsletter = {
        name: $('#name-newsletter-footer').val(),
        area_id: $('#area-id-newsletter-footer').val(),
        neighborhood: $('#neighborhood-newsletter-footer').val(),
        mobile: $('#mobile-newsletter-footer').val(),
        email: $('#email-newsletter-footer').val(),
    }

    axios.post('../../savenewsletter', newsletter)
      .then((data) => {

            $('#name-newsletter-footer').val("");
            $('#area-id-newsletter-footer').val("");
            $('#neighborhood-newsletter-footer').val("");
            $('#mobile-newsletter-footer').val("");
            $('#email-newsletter-footer').val("");

            $('#success-message-footer').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإشتراك!</strong>تم الإشتراك فى النشرة التسويقية !</div></div>');
            setTimeout(() => {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove() 
                });
            }, 2000);
        });
}

</script>
