window.form_data = new FormData();

$(document).on('change','#file',function(e){
    let file_data = $('#file').prop('files')[0];
    form_data.append('file_data', file_data);
});

function sendContact(){
    form_data.append('area_id', $(".area_id_contact").val())
    form_data.append('name', $(".name").val())
    form_data.append('mobile', $(".mobile").val())
    form_data.append('email', $(".email").val())
    form_data.append('service_id', $(".service_id").val())
    form_data.append('body', $(".body").val())

    axios.post('../../sendcontact', form_data)
    .then((data) => {


        //$(".area_id").val('');
        $(".name").val('');
        $(".mobile").val('');
        $(".email").val('');
        //$(".service_id").val('');
        $(".body").val('');

        $('.name-contact-error').empty();
        $('.body-contact-error').empty();
        $('.mobile-contact-error').empty();
        $('.email-contact-error').empty();


        $('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> الرسالة قد تم إرسالها بنجاح!</div></div>');
        setTimeout(() => {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove() 
            });
        }, 2000);
    }).catch((error) => {

        $('.name-contact-error').empty();
        $('.body-contact-error').empty();
        $('.mobile-contact-error').empty();
        $('.email-contact-error').empty();

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