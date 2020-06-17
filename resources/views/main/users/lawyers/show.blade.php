@extends('main.layouts.app')

@section('title') {{ $lawyer->profile->full_name  }}  @endsection

@section('header')
    <style>
        #social-links ul li{
            display: inline;
            padding: 50px;
        }
    </style>
@endsection

@section('content')


<!-- lawyer_pages -->
<section id="lawyer_page">
    <div class="container">
        <div class="title_pages">
            <h2>صفحة محامي موقع واجهة العقار الإلكتروني</h2>
            <span></span>
        </div>
        <div class="block_ads_local block_time bord_small" style="border:0;margin-bottom:25px;">
            <div class="row_00">
                <div class="col-sm-6 col-xs-12 padd_none">
                    <span>
                        <strong> أخر تحديث </strong> : {{ $lawyer->update_at }}&nbsp;<i class="fa fa-calendar-check"></i>
                    </span>
                </div>
                                <div class="col-sm-6 col-xs-12 padd_none">
                    <span>
                        <strong> عدد المشاهدات : </strong> {{ $views }} مشاهدة
                    <i class="fa fa-eye"></i>
                    </span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="img_lawyer">
                    <img src="{{ url('main/images/pic_doc.jpg') }}" class="img-thumbnail img-responsive">
                </div>

            </div>
            <div class="col-sm-9 col-xs-12">
                <div class="details_lawyer">
                    <div class="">
                        <strong class="col-sm-2 col-xs-12">اسم المكتب  </strong> 
                        <span class="col-sm-10 col-xs-12">{{ $lawyer->profile->full_name }}</span>
                    </div>

                    <div>
                        <strong class="col-sm-2 col-xs-12">عنوان المكتب</strong> 
                        <span class="col-sm-10 col-xs-12">{{ $lawyer->profile->address }}</span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <strong class="col-sm-4 col-xs-12">رقم الجوال</strong> 
                                <span class="col-sm-8 col-xs-12">{{ $lawyer->profile->mobile1 }}</span>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <strong class="col-sm-4 col-xs-12">التلفون</strong> 
                                <span class="col-sm-8 col-xs-12">{{ $lawyer->profile->telephone }}</span>
                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <strong class="col-sm-4 col-xs-12">الفاكس</strong> 
                                <span class="col-sm-8 col-xs-12">{{ $lawyer->profile->fax }}</span>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <strong class="col-sm-4 col-xs-12">البريد الإلكتروني</strong> 
                                <span class="col-sm-8 col-xs-12">{{ $lawyer->profile->email }}</span>
                        </div>
                    </div>
                </div>
                                                <div class="block_ads_local block_time no-eff">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <a href="#" title="">
                                            <i class="fa fa-eye"></i> معاينة
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 padd_right no-eff">
                                        <a href="javascript:void(0)" onclick="favourite()" id="favouriting" title="">
                                            <i class="{{ $lawyer->favourite ? "fa fa-heart" : "far fa-heart" }}"></i> {{ $lawyer->favourite ? "إلغاء المفضلة"  :  "مفضلة" }}
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <a href="#" title="" data-toggle="modal" data-target="#share">
                                            <i class="fa fa-share-square"></i> مشاركة
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 padd_right no-eff">
                                        <a href="#" onclick="window.print()" title="">
                                            <i class="fa fa-print"></i> طباعة
                                        </a>
                                    </div>
                                
                            </div>
                        </div>
            </div>
            <div class="text_general_art">
            <div class="card col-sm-12 col-xs-12 ">
            <div class="card-body">
            <p>
                {{ $lawyer->profile->description }}
            </p>
                </div>
                </div>
            <div class="col-sm-6 col-xs-12 bg1">
            
        <div class="form_cont form_cont_00">
                <h3 class="title_contct_us">ارسل رسالة خاصة الى  محامي الموقع </h3>
                <div id="success-message"></div>
                <form>
                    <div class="form-group">
                        <label for="">  الأسم <i class="fa fa-user"></i></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                        <span class="name-contact-error invalid-feedback" role="alert"></span>
                    </div>	
                    <div class="form-group">
                        <label for=""> رقم الجوال <i class="fa fa-phone"></i> </label>
                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="">
                        <span class="mobile-contact-error invalid-feedback" role="alert"></span>
                    </div>
                    <div class="form-group">
                        <label for="">  البريد الإلكترونى <i class="fa fa-envelope-square"></i> </label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                        <span class="email-contact-error invalid-feedback" role="alert"></span>
                    </div>
                    <div class="form-group">
                        <label for="">ارفاق ملف <i class="fa fa-file"></i></label>
                        <input type="file" class="form-control" name="file" id="file" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">  النص <i class="fa fa-file-alt"></i></label>
                        <textarea class="form-control" name="body" id="body" rows="6"></textarea>
                        <span class="body-contact-error invalid-feedback" role="alert"></span>
                    </div>	
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                    <input type="hidden" name="to" id="to" value="{{ $lawyer->id }}">	
                    <button type="submit" onclick="sendContact();return false;" class="btn btn-default btn_web">إرســال</button>
                </form>
            </div>

        </div>
                        <div class="col-sm-6 col-xs-12 ">
                        
                            <iframe src="https://www.google.com/maps/embed/v1/place?q={{$lawyer->profile->lat ?? 13.4118760}},{{$lawyer->profile->lng ?? 135.6190250}}&amp;key=AIzaSyA2obCxpDHFCwyBJe7z5EyrBTgdI1vm8RE&center={{$lawyer->profile->lat ?? 13.4118760}},{{$lawyer->profile->lng ?? 135.6190250}}&zoom=6" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
            
        </div>
        </div>
    </div>	
</section>
<!-- end_lawyer_page -->


<div class="modal fade" id="share" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          مشاركة الصفحة الإعلانية الإلكترونية
        </div>
        <div class="modal-body">

           
            {!! Share::currentPage()->facebook()->twitter()->linkedin()->whatsapp()->telegram() !!}
           
           
        </div>
          
      </div>
    </div>
</div>

@endsection


@section('footer')


    <script>

        function favourite()
        {
            axios.post('../../favourites', {lawyer_id: {!! $lawyer->id !!}})
                .then((data) => {
                    console.log(data.data)
                    if(data.data == 1){
                        $('#favouriting').empty() 
                        $('#favouriting').append('<i class="far fa-heart"></i> مفضلة')
                    }else{
                        $('#favouriting').empty() 
                        $('#favouriting').append('<i class="fa fa-heart"></i> إلغاء المفضلة')
                    }
                })   
        }

   
  window.form_data = new FormData();

$(document).on('change','#file',function(e){

let file_data = $('#file').prop('files')[0];
form_data.append('file_data', file_data);


});


function sendContact(){
    form_data.append('name', $("#name").val())
    form_data.append('mobile', $("#mobile").val())
    form_data.append('email', $("#email").val())
    form_data.append('body', $("#body").val())
    form_data.append('to', $("#to").val())

    axios.post('../../sendlawyercontact', form_data)
                .then((data) => {

                    $("#name").val('');
                    $("#mobile").val('');
                    $("#email").val('');
                    $("#body").val('');

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