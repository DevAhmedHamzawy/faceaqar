<div id="socialopt" class="optitem" style="display:none"> 
    <div id="social_acc" class="desc" style="display: block;">
            <h4>بيانات وسيط واجهة العقار الالكتروني لإعلانات الحسابات التواصل الاجتماعي </h4>
            <div class="block_form_1  block_form_r_1 row">
                
            <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                        <label for="">  أكتب أسم الشهرة للحساب <em>*</em></label>
                    </div>
                    <div class="col-md-4">
                    <input type="name" class="form-control required" name="account_name" placeholder=" اسم نشاط الحساب (اسم الشهرة ">
                    </div>
                </div>

            <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                    <label for="">اختر نوع الحساب<em>*</em></label>
                </div>
                    <div class="col-md-4">
                    <select class="form-control required" name="account_sort">
                        <option selected disabled value="">اختر</option>
                        <option>تويتر</option>
                        <option>تلقرام</option>
                        <option>فيس بوك</option>
                        <option>سناب شات</option>
                        <option>اخرى</option>
                    </select>
                </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                    <label for="">اختر لون الحساب<em>*</em></label>
                </div>
                    <div class="col-md-4">
                    <select class="form-control required" name="color_sort">
                        <option selected disabled value="">اختر لون الحساب</option>
                        <option>عادي</option>
                        <option>ملون</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                    <label for=""> انسخ الرابط الالكتروني للحساب    <em>*</em></label>
                </div>
                    <div class="col-md-4">
                    <input type="url" class="form-control required" name="account_url" placeholder=" انسخ هنا الرابط الالكتروني للحساب  ">
                </div>
            </div>
            
             <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                    <label for="" class="newlabel"> نبذة مختصرة عن الحساب  <em>*</em></label>
                </div>
                    <div class="col-md-4">
                    <textarea class="form-control required" name="description" placeholder=" اكتب نبذة مختصرة عن النشاط التجاري
" rows="4"></textarea>
                </div>
            </div>
              
                <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                        <label for="">   صورة حساب التواصل الإجتماعي </label>
                    </div>
                    <div class="col-md-4">
                        <input type="file" name="social_image" class="form-control required" id="" placeholder="">
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                        <label for="" class="newlabel"> إضافة تعليق عن الإعلان</label>
                    </div>
                    <div class="col-md-4">
                        <textarea class="form-control required" name="comment" rows="4"></textarea>
                    </div>
                </div>
            
            <h4> بيانات مدة الاعلان الالكتروني بالموقع </h4>
                <div class="row">
                <div class="col-md-3 col-md-offset-2 forright">
                        <label for="">اختر مدة الإعلان<em>*</em></label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control required" name="duration_id">
                            <option selected disabled value=""> اختر </option>
                            <option value="0">لايوجد </option>
                            <option value="1">15 يوم </option>
                            <option value="2">شهر</option>
                            <option value="3">3 شهور</option>
                            <option value="4">6 شهور</option>
                            <option value="5">سنه</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    {!! NoCaptcha::renderJs() !!}
                    {!! NoCaptcha::display() !!}
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <strong class="danger">الموقع / لا يتحمل مسئولية ما يتم نشرهـ  من خلال هذه الحسابات </strong>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 text-center">

                        <div class="checkbox form-group Terms_line">
                            <label>
                                <input type="checkbox" class="required" name="agree"> أوافق علي كافة الاحكام والشروط للموقع الإلكتروني والالتزام بما جاء فيها
                            </label>
                        </div>													</div>

                </div>
                <div class="row">
                                                                        <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-default btn_web">تسجيل</button>
                        <button type="submit" class="btn btn-default btn_web">حفظ</button>
                        <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                    </div>

                </div>


            </div>
        </div>
</div>
</div>