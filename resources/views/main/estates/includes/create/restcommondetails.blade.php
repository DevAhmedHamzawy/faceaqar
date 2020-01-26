<div class="row">
    <div class="col-md-12">
        <h4>اكتب وصف اكثر عن {{ $adSort->title }} </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <textarea class="form-control" name="description" rows="6">{{ old('description') }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4>ارفاق صور عن {{ $adSort->title }} </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12 dropzone" id="image-upload">
        
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4>حدد موقع المخطط {{ $adSort->title }} الجغرافي على مخطط ماب</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d27626.27366240017!2d31.35026109284309!3d30.057386886394237!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2seg!4v1485270685978" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
</div>
@if($adSort->name == 'auction_estate')
    @include('main.estates.includes.create.auction_estate')                
@endif
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
        <input type="text" name="name" class="form-control" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label>اختر نوع المعلن <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control required" name="advertiser_sort_id">
            <option> اختر </option>
            <option value="1">مكتب عقاري</option>
            <option value="2">مطور عقارى  </option>
            <option value="3"> شركة عقارية</option>
            <option value="4">مكتب مزاد عقاري</option>
            <option value="5">مكتب هندسي</option>
            <option value="6"> مالك</option>
            <option value="7"> وسيط </option>
            <option value="8"> اخرى </option>
        </select>
    </div>

    <div class="col-md-2">
        <label for="">(1) رقــم الجوال <em>*</em></label>
    </div>
    <div class="col-md-4">
        <input type="number" name="mobile1" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">(2) رقــم الجوال </label>
    </div>
    <div class="col-md-4">
        <input type="number" name="mobile2" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">التلفون</label>
    </div>
    <div class="col-md-4">
        <input type="number" name="telephone" class="form-control required" id="" placeholder="">
    </div>

    <div class="col-md-2">
        <label for="">فاكس</label>
    </div>
    <div class="col-md-4">
        <input type="number" name="fax" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">سنترال</label>
    </div>
    <div class="col-md-4">
        <input type="number" name="central" class="form-control required" id="" placeholder="">
    </div>

    <div class="col-md-2">
        <label for="">البريد الإلكتروني</label>
    </div>
    <div class="col-md-4">
        <input type="number" name="email" class="form-control required" id="" placeholder="">
    </div>
    

    <div class="col-md-2">
        <label for="">الموقع  الإلكترونى</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="website" class="form-control " id="" placeholder="">
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
                    <select class="form-control required" name="duration_id">
                        <option disabled> اختر </option>
                        <option value="0">لايوجد </option>
                        <option value="1">15 يوم </option>
                        <option value="2">شهر</option>
                        <option value="3">3 شهور</option>
                        <option value="4">6 شهور</option>
                        <option value="5">سنه</option>
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
                            <button type="submit" class="btn btn-default btn_web">إضافة</button>
                            <button type="submit" class="btn btn-default btn_web">حفظ</button>
                            <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                        </div>
                    </div>
</div>
</div>	
</form>
</div>