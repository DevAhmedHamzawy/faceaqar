@extends('main.layouts.app')

@section('content')
<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تعبئة بيانات لإضافة مكتب عقاري</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <h4>بيانات عنوان المكتب العقارى</h4>
                <form method="POST" action="{{ route('update-profile' , $user->id) }}">
                    @csrf
                    @method('put')
                    <div class="block_form_1 row">
                        <div class="row">
                            <div class="col-md-2">
                                <label for=""> اختر اسم المنطقة <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control selectOption required" required>
                                    <option value="choose">اختر المنطقة</option>
                                    <option value="images">الرياض</option>
                                    <option value="images">المدينة</option>
                                </select>											
                            </div>
                            <div class="col-md-2">
                                <label for=""> اختر اسم المدينة  <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control selectOption required" required>
                                    <option value="choose">اختر المدينة</option>
                                    <option value="images">الرياض</option>
                                    <option value="images">المدينة</option>
                                </select>													
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">  اسم المركز </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="center" value="{{ $user->profile->center ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">  اسم الحى <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="neighborhood" value="{{ $user->profile->neighborhood ?? '' }}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">  اسم الشارع </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="street" value="{{ $user->profile->street ?? '' }}">
                            </div>
                            <div class="col-md-2">
                                <label for="">  العنوان التفصيلي  </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="address" value="{{ $user->profile->address ?? '' }}">
                            </div>
                        </div>
                    </div>
                    
                        <div class="row">
                            <div class="col-md-6 col-md-push-3">
                                <h4>
                                    البيانات الشخصية لصاحب المكتب العقاري
                                    غير قابلة للنشر بناءاً على سياسة الخصوصية بالموقع	
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">  الاسم الرباعي    <em>*</em></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="full_name" value="{{ $user->profile->full_name ?? '' }}">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">ارفاق صورة الهوية الوطنية </label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" id="" placeholder="ارفاق صورة">
                            </div>
                            <div class="col-md-3">
                                <label for="">ارفاق صورة من السجل التجاري </label>
                            </div>
                            <div class="col-md-3">
                                <input type="file" class="form-control" id="" placeholder="ارفاق صورة">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h4> بيانات عن المكتب العقاري الالكتروني </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for=""> اسم المكتب العقاري <em>*</em></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="office_name" value="{{ $user->profile->office_name ?? '' }}">
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3">
                                <label for="">  نشاط المكتب العقاري </label>
                            </div>
                            <div class="col-md-9">
                            <textarea class="form-control required" name="namefield5" rows="4">{{ $user->profile->office_activity ?? '' }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <label for="">  رقم الترخيص للسجل التجاري </label>
                            </div>
                            <div class="col-md-3">
                            <input type="text" class="form-control" name="commercial_register_no" value="{{ $user->profile->commercial_register_no ?? '' }}">
                            </div>
                            
                            <div class="col-md-3">
                                <label for=""> إضافة فيديو يوتيوب </label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="youtube" value="{{ $user->profile->youtube ?? '' }}">
                            </div>
                        </div>
                    
                    <h4>انسخ الروابط الإلكترونية لحسابات التواصل الإجتماعي</h4>
                    <div class="social-media2">
                            <ul>
                                <li> <a href="#"> <img src="images/fb.png"> </a> </li>
                                <li> <a href="#"> <img src="images/tw.png"> </a> </li>
                                <li> <a href="#"> <img src="images/yo.png"> </a> </li>
                                <li> <a href="#"> <img src="images/qady.png"> </a> </li>
                                <li> <a href="#"> <img src="images/wh.png"> </a> </li>
                                <li> <a href="#"> <img src="images/sn.png"> </a> </li>
                            </ul>
                        </div>
                        <div class="row">
                            <br/>
                    <h4>اكتب وصف أكثر عن نشاط المكتب العقاري</h4>
                    <div class="form-group">
                        <textarea class="form-control" name="description" rows="6">{{ $user->profile->description ?? '' }}</textarea>
                    </div><br/>
                    <h4>  ارفاق صور نشاط المكتب العقاري  </h4>
                    <div class="form-group">
                        <input type="file" class="form-control" id="" placeholder="">
                    </div>
                            

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> <strong> حدد موقع المكتب العقاري الجغرافي على مخطط ماب </strong> </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27626.27366240017!2d31.35026109284309!3d30.057386886394237!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1485270685978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4> بيانات المعلن </h4>
                            </div>
                        </div>
                                <div class="block_form_1">
                            <div class="col-md-2">
                                <label for="">اســم المعلن <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label>اختر نوع المعلن <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control required">
                                    <option> اختر </option>
                                    <option>مكتب عقاري</option>
                                    <option>مطور عقارى  </option>
                                    <option> شركة عقارية</option>
                                    <option>مكتب مزاد عقاري</option>
                                    <option>مكتب هندسي</option>
                                    <option> مالك</option>
                                    <option> وسيط </option>
                                    <option> اخرى </option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <label for="">(1) رقــم الجوال <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="mobile1" value="{{ $user->profile->mobile1 ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">(2) رقــم الجوال </label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="mobile2" value="{{ $user->profile->mobile2 ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">التلفون</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="telephone" value="{{ $user->profile->telephone ?? '' }}">
                            </div>
                    
                            <div class="col-md-2">
                                <label for="">فاكس</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="fax" value="{{ $user->profile->fax ?? '' }}">
                            </div>
                            
                            <div class="col-md-2">
                                <label for="">سنترال</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control required" name="central" value="{{ $user->profile->central ?? '' }}">
                            </div>
                    
                            <div class="col-md-2">
                                <label for="">البريد الإلكتروني</label>
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control required" name="email" value="{{ $user->profile->email ?? '' }}">
                            </div>
                            

                            <div class="col-md-2">
                                <label for="">الموقع  الإلكترونى</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control " name="website" value="{{ $user->profile->website ?? '' }}">
                            </div>

                            <div class="col-md-12 text-center pd-top">
                                <input type="checkbox" name="choice-type" id="checkbox1" >
                                <label for="choice-type-number" class="imp-n-s">
هل ترغب تثبيت صفحتك الالكترونية في مقدمة الإعلانات الالكترونية في جميع صفحات مدينتك بالموقع؟
                                </label>
                                <span class="imp-n-s-2"> إضافة رسوم مالية عند التثبيت </span>
                                <div class="reveal-if-active" id="autoUpdate">
                                    <div class="row">
                                        <div class="col-md-3 hidden-xs"></div>
                                        <div class="col-md-2">
                                            <label for="">اختر مدة التثبيت <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control required">
                                                <option> اختر </option>
                                                <option>لايوجد </option>
                                                <option>15 يوم </option>
                                                <option>شهر</option>
                                                <option>3 شهور</option>
                                                <option>6 شهور</option>
                                                <option>سنه</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 hidden-xs"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <br/>
                                <h4> بيانات مدة إضافة صفحتك الإلكترونية بالموقع </h4>
                            </div>
                                                
                            <div class="col-md-3 hidden-xs"></div>
                            <div class="col-md-2">
                                <label for=""> اختر مــدة الإضافة <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control required">
                                    <option>اختر</option>
                                    <option>شهر</option>
                                    <option>3 شهور</option>
                                    <option>6 شهور</option>
                                    <option>سنه</option>
                                </select>
                            </div>
                            <div class="col-md-3 hidden-xs"></div>
                            <div class="clearfix"></div>         
                            <div class="col-md-3 hidden-xs"></div>
                            <div class="col-md-2 add-code">
                                <label for=""> <i class="fa fa-qrcode"></i> ادخل  رمز التحقق <em>*</em></label>
                            </div>
                            <div class="col-md-4 add-code">
                                <div class="form-group sdf required">
                                    <img src="images/number_code.png" class="img-responsive" alt="">
                                    <input type="text" class="form-control required" id="" placeholder="" name="namefield6">
                                </div>

                            </div>
                            <div class="col-md-3 hidden-xs"></div>
                            <div class="col-md-12">
                                <div class="checkbox form-group Terms_line text-right">
                                <label>
                                    <input type="checkbox">
اوافق على كافة الأحكام والشروط للموقع الإلكتروني والإلتزام بما جاء فيها.
                                </label>
                            </div>
                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-default btn_web">حفظ</button>
                                                    <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                                                </div>
                                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection