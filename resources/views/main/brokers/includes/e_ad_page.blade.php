<div id="mediaopt" class="optitem" style="display:none">
    <div id="images" class="desc" style="display: block;">
          <h4> بيانات وسيط واجهة العقار الالكتروني لحجز صفحة اعلانية كاملة</h4>
             <div class="block_form_1  block_form_r_1 row">
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                        <label for="">  ارفاق الملف الالكتروني  <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                        <input type="file" name="page_file[]" class="form-control required" id="" placeholder="">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختر موقع الصفحة الاعلانية <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required" name="page_widget">
                            <option selected disabled value=""></option>
                            <option>الرئيسية</option>
                            <option>فوتر</option>
                         </select>													
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختر لون الصفحة الاعلانية    <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required" name="color_sort">
                             <option selected disabled value="">أختر اللون</option>
                             <option>ملون</option>
                             <option>أبيض وأسود</option>
                         </select>													
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> انسخ الرابط الالكتروني للصفحة
                             
                         </label>
                     </div>
                     <div class="col-md-4">
                         <input type="text" class="form-control required" name="page_url" placeholder="انسخ هنا الرابط الالكتروني للصفحة">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اضف تعليق عن الإعلان </label>
                     </div>
                     <div class="col-md-4">
                         <textarea class="form-control required" name="page_comment" rows="4"></textarea>
                     </div>
                 </div>
                 
                 <h4> بيانات مدة الاعلان الالكتروني بالموقع </h4>

                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختــر مدة الإعلان <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required" name="duration_id">
                             <option selected disabled value="">اختر</option>
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
                         <div class="checkbox form-group Terms_line text-center">
                             <label>
                                 <input type="checkbox" class="required" name="accept">أوافق علي كافة الاحكام والشروط للموقع الإلكتروني والالتزام بما جاء فيها
                             </label>
                         </div>
                     </div>
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