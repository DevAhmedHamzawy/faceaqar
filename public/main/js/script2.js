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
                /*if(error.response.data.errors.area_id){
                    $('.area-id-register-error').append('<strong>'+error.response.data.errors.area_id+'</strong>');
                    $('.area-id-register').addClass('is-invalid')
                }*/
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
           $('#cities').append('<option value="'+city.name+'" data-lat="'+city.latitude+'" data-lng="'+city.longitude+'">'+city.name+'</option>')
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



function getCitiesContact(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('#cities_contact').empty()
           for(city of data.data){
           $('#cities_contact').append('<option value="'+city.name+'" data-lat="'+city.latitude+'" data-lng="'+city.longitude+'">'+city.name+'</option>')
           }  
        })
}


function getSubCitiesContact(item){
    axios.get('../../areas/'+item.value)
        .then((data) => {
           $('.area_id_contact').empty()
           for(subcity of data.data){
           $('.area_id_contact').append('<option value="'+subcity.id+'" data-lat="'+subcity.latitude+'" data-lng="'+subcity.longitude+'">'+subcity.name+'</option>')
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