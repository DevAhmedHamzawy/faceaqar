<h4> حدد موعد المزاد العقاري </h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                        <label for="">اختر اليوم<em>*</em></label>   <select class="form-control">
                                        <option>السبت </option>
                                        <option>الاحد</option>
                                        <option>الأثنين </option>
                                        <option>الثلاثاء</option>
                                        <option>الأربعاء</option>
                                        <option>الخميس</option>
                                        <option>الجمعة</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                        <label for="">اختر التاريخ الهجري<em>*</em></label>  
                                <input  class="form-control hijri-date-input" type="text" name="date" placeholder="تقويم هجري">
                            </div>
                            <div class="col-md-3">
                        <label for="">اختر التاريخ الميلادي<em>*</em></label>
                                <input  class="form-control hijri-date-input" type="text" name="date" placeholder="تقويم هجري">
                            </div>
                            <div class="col-md-3">
                        <label for="">اختر الوقت<em>*</em></label>
                                    <input type="time" name="time" class="form-control" placeholder="20:00 ص" id="timepicker1" name="timepicker1">
                            </div>
                                   
                                   
                                 <div class="row">
                            <div class="col-md-12">
                              <h4>اكتب شروط دخول المزاد العقاري</h4>
                              <textarea class="form-control" name="auction_conditions" value="{{ old('auction_conditions') }}" rows="4"></textarea>

                            </div>
                        </div>