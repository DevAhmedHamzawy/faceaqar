<div class="center-sepag ser-pages for-more" id="showmore">
<h2>مزيد من التفاصيل حول العقار</h2>
<div class="sel1">
    <p>اسم المخطط</p>
    <input type="text" name="schema_name" placeholder="اسم المخطط">
</div> 
<div class="sel1">
    <p>رقم المخطط</p>
    <input type="text" name="schema_number" placeholder="رقم المخطط">
</div> 
<div class="sel1">
    <p> رقم البلوك</p>
    <input type="text" name="block_number" placeholder="رقم البلوك">
</div> 
<div class="sel1">
    <p>رقم القطعة </p>
    <input type="text" name="piece_number" placeholder="رقم القطعة">
</div> 
<div class="sel1">
    <p>عدد الشوارع </p>
    <div class="custom-select" >
    <select name="streets_number">
      <option value="">اختر</option>
      <option>شارع واحد  </option>
      <option>شارعين  </option>
      <option>3 شوارع </option>
      <option>4 شوارع</option>
    </select>
    </div>
</div> 
    <div class="sel1">
    <p>واجهة العقار </p>
    <div class="custom-select" >
    <select name="destination_id">
      <option value=""  >اختر</option>
      @foreach ($destinations as $destination)
          <option value="{{ $destination->id }}">{{ $destination->name }}</option>
      @endforeach
    </select>
    </div>
</div> 
<div class="sel1">
    <p> مساحة البناء م٢	 </p>
    <div >
      <input type="number" name="estate_space" value="{{ old('estate_space') }}" class="form-control required" id="" placeholder="  مساحة العقار م٢ ">
    </div>
</div>
<div class="sel1">
    <p> تصميم البناء	 </p>
    <div class="custom-select" >
    <select name="building_design">
      <option class="choose" value=""  > اختر </option>
      <option> 0   </option>
      <option> 00  </option>
    </select>
    </div>
</div>
    <div class="sel1">
    <p> عمر العقار	 </p>
    <div >
      <input type="number" name="age" value="{{ old('age') }}" class="form-control" id="" placeholder="عمر العقار">
    </div>
</div>
<div class="sel1">
    <p> عدد الادوار	  </p>
    <div >
      <input type="number" name="floors_number" value="{{ old('floors_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> عدد الوحدات	 </p>
    <div >
      <input type="number" name="units_number" value="{{ old('units_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> رقم الدور	 </p>
    <div >
      <input type="number" name="floor_number" value="{{ old('floor_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> رقم الوحدة </p>
    <div >
      <input type="number" name="unit_number" value="{{ old('unit_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> عدد الصالات	 </p>
    <div >
      <input type="number" name="receptions_number" value="{{ old('receptions_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> عدد المطابخ	 </p>
    <div >
      <input type="number" name="kitchens_number" value="{{ old('kitchens_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> عدد المخازن	 </p>
    <div >
      <input type="number" name="stores_number" value="{{ old('stores_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> المصاعد </p>
    <div >
      <input type="number" name="lifts_number" value="{{ old('lifts_number') }}" min="0" id="">
    </div>
</div>
<div class="sel1">
    <p> البدروم (تحت الارض)	</p>
    <div class="custom-select" >
    <select name="basement">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p> الخزانات الارضية</p>
    <div class="custom-select">
    <select  name="floor_tanks_sort">
      <option class="choose" value=""  > اختر </option>
      <option> نوع    </option>
      <option> نوع اخر   </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p>  الخزانات العلوية	 </p>
    <div class="custom-select">
    <select name="overhead_tanks_sort">
      <option class="choose" value=""  > اختر </option>
      <option> نوع    </option>
      <option> نوع اخر   </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p>موقف السيارات (كراج)	 </p>
    <div class="custom-select" >
    <select name="parking">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p> شبكة الكهرباء	 </p>
    <div class="custom-select">
    <select name="electricity_network">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p>شبكة المياة	</p>
    <div class="custom-select">
    <select name="water_network">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>
<div class="sel1">
    <p> شبكة الغاز	 </p>
    <div class="custom-select">
    <select name="gas_network">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>

<div class="for-sel2">
<div class="sel1">
    <p> شبكة الصرف الصحي </p>
    <div class="custom-select">
    <select name="sewerage_network">
      <option class="choose" value=""  > اختر </option>
      <option> يوجد   </option>
      <option> لا يوجد  </option>
    </select>
    </div>
</div>
</div>
    <div class="sel1">
    <p>نوع السعر </p>
    <div class="custom-select">
    <select name="price_sort_id">
      <option  value="">اختر</option>
      @foreach ($priceSorts as $priceSort)
          <option value="{{ $priceSort->id }}">{{ $priceSort->name }}</option>
      @endforeach
    </select>
    </div>
</div>
    <div class="sel1">
    <p>طريقة الدفع</p>
    <div class="custom-select" >
    <select name="payment_sort_id">
      <option  value="">اختر</option>
      @foreach ($paymentSorts as $paymentSort)
          <option value="{{ $paymentSort->id }}">{{ $paymentSort->name }}</option>
      @endforeach
    </select>
    </div>
</div>
    <div class="sel1">
    <p>المستندات</p>
    <div class="custom-select">
    <select name="docs">
      <option value="">اختر  </option>
      <option>بصك  </option>
      <option>بدون صك   </option>
      <option>أخرى</option>
    </select>
    </div>
</div> 
<div class="sel1">
    <p>التسليم</p>
    <div class="custom-select">
    <select name="delivery_method">
      <option value="">اختر   </option>
      <option>فورى   </option>
      <option>أخرى  </option>
    </select>
    </div>
</div> 

</div>