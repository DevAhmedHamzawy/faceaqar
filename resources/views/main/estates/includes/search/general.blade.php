<div class="row">
  <div class="col-md-4">
<select class="form-control" onchange="getCitiesSearch(this);">
  <option value="">اختر اسم الدولة</option>
  @foreach ($areas as $area)
      <option value="{{ $area->name }}">{{ $area->name }}</option>
  @endforeach
</select>
</div>
<div class="col-md-4">

<select class="form-control" id="cities-search" onchange="getSubCitiesSearch(this);">
 <option value="">اختر اسم المنطقة</option>
</select>
</div>
<div class="col-md-4">

<select class="form-control" name="area" id="area-id-newsletter-search">
 <option value="">اختر اسم المدينة</option>
 
</select>
</div>


<div class="sel1" style="margin-top: 15px;">
  <p> نوع العقار</p>
  <div class="custom-select">
  <select name="category">
    @foreach ($categories as $category)
      <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
  </div>
</div>

</div>