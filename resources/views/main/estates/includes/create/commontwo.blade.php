<div class="block_form_1 row">
    <h4> بيانات عن {{ $adSort->title }} </h4>

  <div class="col-sm-12 col-xs-12 local-test local-test-forl">
      <div class="col-md-12">
        <div class="col-md-1">
            <label for="" class="form-full-lab">  اسم {{ $adSort->title }}  <em>*</em></label>
        </div>
        <div class="col-md-11">
            <input type="text" name="name" value="{{ old('name') }}" class="form-control required form-full-desk2" id="" placeholder="اسم {{ $adSort->title }} ">
        </div>
      </div>
      <div class="col-md-4">
          <div class="row">
            <div class="col-md-4">
                <label for="">اختر نوع العقار <em>*</em></label>
            </div>
            <div class="col-md-8">
                <select class="form-control selectOption" name="category_id" required>
                    <option value="choose"  >اختر</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
      </div>
      <div class="col-md-4">
          <div class="row">
            <div class="col-md-4">
                <label for="">اختر نوع القطعة <em>*</em></label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="sort_id" required>
                    <option  >اختر</option>
                    @foreach ($sorts as $sort)
                        <option value="{{ $sort->id }}">{{ $sort->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اختر نوع العرض <em>*</em></label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="offer_id">
                    <option value="choose"  >اختر</option>
                    @foreach ($offers as $offer)
                        <option value="{{ $offer->id }}">{{ $offer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اسـم المخطط</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="schema_name" value="{{ old('schema_name') }}" class="form-control" id="" placeholder=" اسم المخطط ">
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">رقم المخطط</label>
            </div>
            <div class="col-md-8">
                <input type="number" name="schema_number" value="{{ old('schema_number') }}" class="form-control" id="" placeholder=" اكتب رقم ">
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> رقم البلوك</label>
            </div>
            <div class="col-md-8">
                <input type="number" name="block_number" value="{{ old('block_number') }}" class="form-control required" id="" placeholder=" رقم البلوك ">
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> رقم القطعة </label>
            </div>
            <div class="col-md-8">
                <input type="number" name="piece_number" value="{{ old('piece_number')}}" class="form-control required" id="" placeholder=" رقم القطعة ">
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> اختر عدد الشوارع </label>
            </div>
            <div class="col-md-8">
                <select class="form-control required" name="streets_number">
                    <option value= "" >اختر</option>
                    <option>شارع واحد  </option>
                    <option>شارعين  </option>
                    <option>3 شوارع </option>
                    <option>4 شوارع</option>
                </select>
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> اختر واجهة العقار </label>
            </div>
            <div class="col-md-8">
                <select class="form-control required" name="destination_id">
                    <option class="choose" value= "" >اختر</option>
                    @foreach ($destinations as $destination)
                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> مساحة العقار م٢ </label>
            </div>
            <div class="col-md-8">
                <input type="number" name="estate_space" value="{{ old('estate_space') }}" class="form-control required" id="" placeholder="  مساحة العقار م٢ ">
            </div>
        </div>
      </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for=""> السعر </label>
            </div>
            <div class="col-md-8">
                <input type="number" name="price" value="{{ old('price') }}"  class="form-control" id="" placeholder=" سعر العقار ">
            </div>
        </div>
     </div>
      
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اختر نوع السعر</label>
            </div>
            <div class="col-md-8">
                <select class="form-control required" name="price_sort_id">
                    <option value= "" >اختر</option>
                    @foreach ($priceSorts as $priceSort)
                        <option value="{{ $priceSort->id }}">{{ $priceSort->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اختر طريقة الدفع</label>
            </div>
            <div class="col-md-8">
                <select class="form-control required" name="payment_sort_id">
                    <option value= "" >اختر</option>
                    @foreach ($paymentSorts as $paymentSort)
                        <option value="{{ $paymentSort->id }}">{{ $paymentSort->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
     </div>
     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اختر المستندات</label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="docs">
                    <option value= "" >اختر  </option>
                    <option>بصك  </option>
                    <option>بدون صك   </option>
                    <option>أخرى</option>
                </select>
            </div>
        </div>
     </div>

     <div class="col-md-4">
        <div class="row">
            <div class="col-md-4">
                <label for="">اختر طريقة التسليم</label>
            </div>
            <div class="col-md-8">
                <select class="form-control" name="delivery_method">
                    <option value= "" >اختر   </option>
                    <option>فورى   </option>
                    <option>أخرى  </option>
                </select>
            </div>
        </div>
     </div>
     <div class="col-md-12">
        <div class="row">
            <div class="col-md-1">
                <label for=""> إضافة فيديو يوتيوب  </label>
            </div>
            <div class="col-md-11">
                <input type="text" name="youtube" value="{{ old('youtube') }}" class="form-control form-full-desk" id="" placeholder=" انسخ عنوان الرابط الالكتروني لفيديو يوتيوب ">
            </div>
        </div>
     </div>
     <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <label for="">اكتب الملاحظات</label>
                <textarea class="form-control" name="description" rows="2" placeholder="اكتب اي ملاحظات هنا">{{ old('description') }}</textarea>
            </div>
        </div>
     </div>
</div>


    
    <div class="col-md-12 pd-top local-test">
            <input type="checkbox" id="Showmorein">
            <label for="choice-type-number" class="imp-n-ss">
                ادخل المزيد عن بيانات العقار
            </label>
        
            <div class="reveal-if-active" id="moreinaq">
                    <h4>   بيانات عن العقار خاصة للمباني</h4>
                 <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">مساحة البناء م٢</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="building_space" value="{{ old('building_space') }}" class="form-control" id="" placeholder="مساحة البناء م٢">
                            </div>
                        </div>
                 </div>
                 <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                            <label for=""> تصميم البناء </label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="building_design">
                                <option class="choose" value= "" > اختر </option>
                                <option> 0   </option>
                                <option> 00  </option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">عمر العقار</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" name="age" value="{{ old('age') }}" class="form-control" id="" placeholder="عمر العقار">
                            </div>
                        </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد الأدوار</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="floors_number" class="form-control" value="{{ old('floors_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد الوحدات</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="units_number" class="form-control" value="{{ old('units_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for=""> رقم الدور </label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="floor_number" class="form-control" value="{{ old('floor_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">رقم الوحدة </label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="unit_number" class="form-control" value="{{ old('unit_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد الغرف</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="rooms_number" class="form-control" value="{{ old('rooms_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد الصالات </label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="receptions_number" class="form-control" value="{{ old('receptions_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد المطابخ</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="kitchens_number" class="form-control" value="{{ old('kitchens_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد المخازن</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="stores_number" class="form-control" value="{{ old('stores_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">عدد الحمامات</label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="bathrooms_number" class="form-control" value="{{ old('bathrooms_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">المصاعد </label>
                        </div>
                        <div class="col-md-8">
                            <input type="number" name="lifts_number" class="form-control" value="{{ old('lifts_number') }}" min="0" id="">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">نوع الخزانات الأرضية </label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="floor_tanks_sort">
                                <option class="choose" value= "" > اختر </option>
                                <option> نوع    </option>
                                <option> نوع اخر   </option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-4">
                            <label for=""> نوع الخزانات العلوية</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="overhead_tanks_sort">
                                <option class="choose" value= "" > اختر </option>
                                <option> نوع    </option>
                                <option> نوع اخر   </option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">البدروم (تحت الأرض) </label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="basement">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">موقف السيارات (كراج)</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="parking">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">شبكة الكهرباء</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="electricity_network">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">شبكة المياة</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="water_network">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">شبكة الغاز</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="gas_network">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="">شبكة الصرف الصحي</label>
                        </div>
                        <div class="col-md-8">
                            <select class="form-control" name="sewerage_network">
                                <option class="choose" value= "" > اختر </option>
                                <option>يوجد</option>
                                <option>لا يوجد</option>
                            </select>
                        </div>
                    </div>
                 </div>
            <div class="col-md-12">
                <h4> اكتب الخدمات الداخلية للعقار </h4>
                <div class="form-group">
                <textarea class="form-control" name="internal_services" rows="6" placeholder="وصف عن العقار">{{ old('internal_services') }}</textarea>
                </div><br/>
                <h4>اكتب الخدمات الخارجية للعقار </h4>
                <div class="form-group">
                    <textarea class="form-control" name="external_services" rows="6" placeholder="وصف عن العقار">{{ old('external_services') }}</textarea>
                </div>
                </div>
            </div>
            </div>
    
</div>	
<br/>