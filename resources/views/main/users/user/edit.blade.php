@extends('main.layouts.app')

@section('content')
<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تعديل بيانات المستخدم {{ $user->name }}</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <h4>البيانات الشخصية</h4>
                <form method="POST" action="{{ route('update-profile' , $user->name) }}">
                    @csrf
                    @method('put')
                    <div class="block_form_1 row">
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
                                <input type="email" class="form-control required" name="email" value="{{ $user->email }}">
                            </div>
                            

                            <div class="col-md-2">
                                <label for="">الموقع  الإلكترونى</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="website" value="{{ $user->profile->website ?? '' }}">
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