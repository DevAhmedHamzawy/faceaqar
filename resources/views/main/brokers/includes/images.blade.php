<div id="photosel" class="optitem" style="display:none">
    <div id="images" class="desc" style="display: block;">
             <h4>بيانات وسيط واجهة العقار الالكتروني للإعلانات المصورة</h4>
             <div class="block_form_1  block_form_r_1 row">
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for="">ارفاق  صورة الإعلان <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <input type="file" name="image" class="form-control required" id="" placeholder="">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختر مقاس صورة الإعلان <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required valid" name="dimensions">
                            <option>230 x 200</option>
                            <option>231 x 201</option>
                            <option>232 x 202</option>
                         </select>
                     </div>
                     <div class="col-md-3">
                         <a href="blank.html" target="_blank" class="danger">  <i class="fa fa-info" aria-hidden="true"></i>  ِشاهد مقاسات الصور بالوسيط   </a>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختر لون صورة الإعلان <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required" name="color_sort">
                             <option>ملون</option>
                             <option>أبيض وأسود</option>
                         </select>													
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for="">  
                            انسخ الرابط الالكتروني للصورة
                         </label>
                     </div>
                     <div class="col-md-4">
                         <input type="text" class="form-control required" name="img_url" placeholder="انسخ هنا الرابط الالكتروني للصورة ">
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اضف تعليق عن الإعلان </label>
                     </div>
                     <div class="col-md-4">
                         <textarea class="form-control required" name="comment" rows="4"></textarea>
                     </div>
                 </div>
                 
             <h4> بيانات مدة الاعلان الالكتروني بالموقع </h4>

                 <div class="row">
                     <div class="col-md-3 col-md-offset-2 forright">
                         <label for=""> اختــر مدة الإعلان <em>*</em></label>
                     </div>
                     <div class="col-md-4">
                         <select class="form-control required" name="duration_id">
                             <option>اختر</option>
                             <option value="0">لايوجد </option>
                             <option value="1">7 أيام </option>
                             <option value="2">15 يوم </option>
                             <option value="3">شهر</option>
                             <option value="4">3 شهور</option>
                             <option value="5">6 شهور</option>
                             <option value="6">سنه</option>
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
                                 <input type="checkbox" class="required" name="agree">أوافق علي كافة الاحكام والشروط للموقع الإلكتروني والالتزام بما جاء فيها
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