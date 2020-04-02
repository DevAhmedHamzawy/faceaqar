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
                                <a href="#">{{ $link->name }}</a>
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
                            <li> <span> <i class="fa fa-angle-left"></i> </span> <a href="#">{{ $link->name }}</a> </li>                            
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
                            <li> <a href="#"> {{ $link->name }} </a> </li><span>/</span>                            
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
                                <a href="#"> {{ $link->name }}  </a>
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
<script src="http://e.22web.org/assets/js/newsTicker.min.js"></script>
<script src="http://e.22web.org/assets/js/SmoothScroll.js"></script>


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
                window.location.href = '/thanks';
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
                window.location.href = '/home';
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


function submitmemberonelogin(){
    let login = {
       email: $('.email-one-login').val(),
       password: $('.password-one-login').val(),
       remember: $('.remember-one-login').val()
    }

    axios.post('../../login', login)
            .then((data) => {
                window.location.href = '/home';
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
            }).catch((error) => {

                $('.name-newsletter-head-one-error').empty();
                $('.neighborhood-newsletter-head-one-error').empty();
                $('.mobile-newsletter-head-one-error').empty();
                $('.email-newsletter-head-one-error').empty();

                if(error.response.data.errors.name){
                    $('.name-newsletter-head-one-error').append('<strong>'+error.response.data.errors.neighborhood+'</strong>');
                    $('.name-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.neighborhood){
                    $('.neighborhood-newsletter-head-one-error').append('<strong>'+error.response.data.errors.neighborhood+'</strong>');
                    $('.neighborhood-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.mobile){
                    $('.mobile-newsletter-head-one-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                    $('.mobile-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.email){
                    $('.email-newsletter-head-one-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email-newsletter').addClass('is-invalid')
                }

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
        }).catch((error) => {

            $('.name-newsletter-head-two-error').empty();
            $('.neighborhood-newsletter-head-two-error').empty();
            $('.mobile-newsletter-head-two-error').empty();
            $('.email-newsletter-head-two-error').empty();

            if(error.response.data.errors.name){
                $('.name-newsletter-head-two-error').append('<strong>'+error.response.data.errors.neighborhood+'</strong>');
                $('.name-newsletter').addClass('is-invalid')
            }
            if(error.response.data.errors.neighborhood){
                $('.neighborhood-newsletter-head-two-error').append('<strong>'+error.response.data.errors.neighborhood+'</strong>');
                $('.neighborhood-newsletter').addClass('is-invalid')
            }
            if(error.response.data.errors.mobile){
                $('.mobile-newsletter-head-two-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                $('.mobile-newsletter').addClass('is-invalid')
            }
            if(error.response.data.errors.email){
                $('.email-newsletter-head-two-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                $('.email-newsletter').addClass('is-invalid')
            }
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

            $('.name-newsletter-footer-error').empty();
            $('.neighborhood-newsletter-footer-error').empty();
            $('.mobile-newsletter-footer-error').empty();
            $('.email-newsletter-footer-error').empty();

            $('#success-message-footer').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإشتراك!</strong>تم الإشتراك فى النشرة التسويقية !</div></div>');
            setTimeout(() => {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove() 
                });
            }, 2000);
        }).catch((error) => {
                $('.name-newsletter-footer-error').empty();
                $('.neighborhood-newsletter-footer-error').empty();
                $('.mobile-newsletter-footer-error').empty();
                $('.email-newsletter-footer-error').empty();

                if(error.response.data.errors.name){
                    $('.name-newsletter-footer-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.neighborhood){
                    $('.neighborhood-newsletter-footer-error').append('<strong>'+error.response.data.errors.neighborhood+'</strong>');
                    $('.neighborhood-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.mobile){
                    $('.mobile-newsletter-footer-error').append('<strong>'+error.response.data.errors.mobile+'</strong>');
                    $('.mobile-newsletter').addClass('is-invalid')
                }
                if(error.response.data.errors.email){
                    $('.email-newsletter-footer-error').append('<strong>'+error.response.data.errors.email+'</strong>');
                    $('.email-newsletter').addClass('is-invalid')
                }

        });
}


function getCities(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities').empty()
           for(city of data.data){
           $('#cities').append('<option value="'+city.id+'" data-lat="'+city.latitude+'" data-lng="'+city.longitude+'">'+city.name+'</option>')
           }  
        })
}


function getSubCities(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#area_id').empty()
           for(subcity of data.data){
           $('#area_id').append('<option value="'+subcity.id+'" data-lat="'+subcity.latitude+'" data-lng="'+subcity.longitude+'">'+subcity.name+'</option>')
           }  
        })
}




function getCitiesNewsletterOne(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities-newsletter-one').empty()
           for(city of data.data){
           $('#cities-newsletter-one').append('<option value="'+city.name+'">'+city.name+'</option>')
           }  
        })
}


function getSubCitiesNewsletterOne(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#area-id-newsletter-head-one').empty()
           for(subcity of data.data){
           $('#area-id-newsletter-head-one').append('<option value="'+subcity.id+'">'+subcity.name+'</option>')
           }  
        })
}


function getCitiesNewslettertwo(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities-newsletter-two').empty()
           for(city of data.data){
           $('#cities-newsletter-two').append('<option value="'+city.name+'">'+city.name+'</option>')
           }  
        })
}


function getSubCitiesNewslettertwo(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#area-id-newsletter-head-two').empty()
           for(subcity of data.data){
           $('#area-id-newsletter-head-two').append('<option value="'+subcity.id+'">'+subcity.name+'</option>')
           }  
        })
}


function getCitiesRegister(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities-register').empty()
           for(city of data.data){
           $('#cities-register').append('<option value="'+city.name+'">'+city.name+'</option>')
           }  
        })
}


function getSubCitiesRegister(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#area-id-register').empty()
           for(subcity of data.data){
           $('#area-id-register').append('<option value="'+subcity.id+'">'+subcity.name+'</option>')
           }  
        })
}



function getCitiesFooter(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities-footer').empty()
           for(city of data.data){
           $('#cities-footer').append('<option value="'+city.name+'">'+city.name+'</option>')
           }  
        })
}


function getSubCitiesFooter(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#area-id-newsletter-footer').empty()
           for(subcity of data.data){
           $('#area-id-newsletter-footer').append('<option value="'+subcity.id+'">'+subcity.name+'</option>')
           }  
        })
}

$('.newsticker').newsTicker();

</script>