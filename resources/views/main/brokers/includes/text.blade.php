<div id="textopt" class="optitem" style="display:none"> 
    <div id="text_write" class="desc" style="display: block;">
            <h4>بيانات وسيط واجهة العقار الالكتروني لإعلانات الكتابات النصية</h4>
            <div class="block_form_1  block_form_r_1 row">
                <div class="row">
                    <div class="col-md-3 col-md-offset-2 forright">
                        <label for="">اكتب النص الإعلانى<em>*</em></label>
                    </div>
                    <div class="col-md-4">
                        <textarea id="field" onkeyup="countChar(this)" class="form-control required" name="description" rows="4"></textarea>
                    </div>
                    <div class="col-md-3">
                        <label for="" class="c_color_001">عداد الحروف = 00 حرف </label>
                        <div id="charNum"></div>
                    </div>
                </div>
                <script>
                    function countChar(val) {
                        var len = val.value.length;
                        if (len >= 500) {
                            val.value = val.value.substring(0, 500);
                        } else {
                            $('#charNum').text(len);
                        }
                    };
                </script>
                <div class="row">
                    <div class="col-md-3 col-md-offset-2 forright">
                        <label for=""> اختر لون كتابة النص <em>*</em></label>
                    </div>
                    <div class="col-md-4">
                        <select class="form-control required" name="color_sort">
                            <option selected disabled value="">اختر</option>
                            <option>اسود</option>
                            <option>احمر</option>
                        </select>													</div>
                </div>
                <h4> بيانات مدة الاعلان الالكتروني بالموقع </h4>
                <div class="row">
                    <div class="col-md-3 col-md-offset-2 forright">
                        <label for=""> اختــر مدة الإعلان <em>*</em></label>
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
                        <div class="checkbox form-group Terms_line">
                            <label>
                                <input type="checkbox" class="required" name="agree"> أوافق علي كافة الاحكام والشروط للموقع الإلكتروني والالتزام بما جاء فيها
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