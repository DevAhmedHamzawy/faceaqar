<!-- search pages -->
<div class="search-pages">
    <div class="container">
        <div class="inside-search">
            <div class="row">
                <div class="col-md-3 col-sm-12 no-pad">
                    <div class="right-sepag">
                        <img src="{{ url('main/images/se-pag.png') }}">
                    </div>
                </div>
                <form action="{{ route('search-by-ad-sort') }}" method="GET">
                <div class="col-md-6 col-sm-12 no-pad">
                    <div class="center-sepag">
                        <h2>البحث عن الصفحات الاعلانية الالكترونية بالموقع</h2>
                        <div class="row" style="padding-bottom:15px;">
                            <div class="col-md-6">
                            <select class="form-control" onchange="getCities(this);">
                              <option value="">اختر اسم الدولة</option>
                              @foreach ($areas as $area)
                                  <option value="{{ $area->name }}">{{ $area->name }}</option>
                              @endforeach
                            </select>
                            </div>
                            <div class="col-md-6">
                            
                            <select class="form-control" name="city_id" id="cities">
                             <option value="">اختر اسم المنطقة</option>
                            </select>
                            </div>
                        </div>

                        <div class="sel2 sel2home">
                            <div class="custom-select">
                            <select name="ad_sort_id" required>
                              <option value="">اختر نوع الصفحة الاعلانية</option>
                              @foreach ($adSorts as $key=>$value)
                                <option value="{{ $value }}">{{ $key }}</option>
                              @endforeach
                            </select>
                            </div>
                        </div>
                        <button type="submit" class="btn">ابدأ البحث</button>
                    </div>
                </div>
                </form>
                <div class="col-md-3 col-sm-12 no-pad">
                    <div class="left-sepag">
                        <p>الصفحات العقارية الالكترونية وكيفية التعامل معها بالشكل الصحيح المباشر المبسط لعملاء الكرام نحن في خدمتكم</p>
                        <p>الصفحات العقارية الالكترونية وكيفية التعامل معها بالشكل الصحيح المباشر المبسط لعملاء الكرام نحن في خدمتكم</p>
                        <a href="#">... اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>