@extends('main.layouts.app')

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
                        <strong> أخر تحديث </strong> : {{ $lawyer->profile->updated_at }}&nbsp;<i class="fa fa-calendar-check"></i>
                    </span>
                </div>
                                <div class="col-sm-6 col-xs-12 padd_none">
                    <span>
                        <strong> عدد المشاهدات : </strong> {{ $lawyer->profile->views }} مشاهدة
                    <i class="fa fa-eye"></i>
                    </span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xs-12">
                <div class="img_lawyer">
                    <img src="images/pic_doc.jpg" class="img-thumbnail img-responsive">
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
                                        <a href="#" title="">
                                            <i class="fa fa-save"></i> حفظ
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <a href="#" title="" data-toggle="modal" data-target="#share">
                                            <i class="fa fa-share-square"></i> مشاركة
                                        </a>
                                    </div>
                                    <div class="col-sm-3 col-xs-12 padd_right no-eff">
                                        <a href="#" title="">
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
                <form>
                    <div class="form-group">
                        <label for="">  الأسم <i class="fa fa-user"></i></label>
                        <input type="text" class="form-control " id="" placeholder="">
                    </div>	
                    <div class="form-group">
                        <label for=""> رقم الجوال <i class="fa fa-phone"></i> </label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">  البريد الإلكترونى <i class="fa fa-envelope-square"></i> </label>
                        <input type="text" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">ارفاق ملف <i class="fa fa-file"></i></label>
                        <input type="file" class="form-control" id="" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">  النص <i class="fa fa-file-alt"></i></label>
                        <textarea class="form-control" rows="6"></textarea>
                    </div>	
                    <button type="submit" class="btn btn-default btn_web">إرســال</button>
                </form>
            </div>

        </div>
                        <div class="col-sm-6 col-xs-12 ">
                        
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27626.27366240017!2d31.35026109284309!3d30.057386886394237!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1485270685978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
            
        </div>
        </div>
    </div>	
</section>
<!-- end_lawyer_page -->


@endsection