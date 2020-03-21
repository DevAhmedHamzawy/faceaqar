@extends('main.layouts.app')

@section('title') بحث {{ $adSort->adjective }}  @endsection

@section('content')

@if($adSort != 'general')
<form method="get" action="{{ route('getresults', $adSort->name) }}" id="filtersform">
@else
<form>
@endif
    <div class="all-ser-pages">
            <div class="container">
                            <div class="center-sepag ser-pages">
                                <h2>البحث عن {{ $adSort->adjective ?? 'العقارات' }} بالموقع</h2>

                                @if($adSort == 'general')
                                    @include('main.estates.includes.search.general')
                                @else
                                <div class="sel1">
                                    <p> المنطقة </p>
                                    <div class="custom-select">
                                    <select>
                                      <option value="volvo">الكل</option>
                                      <option value="saab">الرياض</option>
                                      <option value="mercedes">الرياض</option>
                                      <option value="audi">الرياض</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="sel1">
                                    <p>المدينة  </p>
                                    <div class="custom-select">
                                    <select name="area_id">
                                      <option value="volvo">الكل</option>
                                      <option value="183">الرياض</option>
                                      <option value="178">الرياض</option>
                                      <option value="183">الرياض</option>
                                    </select>
                                    </div>
                                </div>

                                @if($adSort->name == 'global_estate')
                                <div class="sel1">
                                    <p> الشارع</p>
                                    <input type="text" name="street" placeholder="اسم الشارع">
                                </div>
                                @endif

                                @if($adSort->name != 'global_estate')
                                <div class="sel1">
                                    <p> المركز</p>
                                    <input type="text" name="center" placeholder="اسم المركز">
                                </div>
                                @endif

                                @if($adSort->name != 'global_estate')
                                    <div class="for-sel2">
                                        <div class="sel1">
                                            <p> الحي</p>
                                            <input type="text" name="neighborhood" placeholder="اسم الحي">
                                        </div>  
                                        <div class="sel1">
                                            <p> الشارع</p>
                                            <input type="text" name="street" placeholder="اسم الشارع">
                                        </div>
                                    </div>
                                @endif


                                @if($adSort->name == 'schema_estate')
                                    <div class="sel1">
                                        <p> إسم المخطط</p>
                                        <input type="text" name="schema" placeholder="إسم المخطط">
                                    </div>
                                @endif

                                @if($adSort->name != 'schema_estate')

                                <div class="sel1">
                                    <p> نوع العقار</p>
                                    <div class="custom-select">
                                    <select name="category_id">
                                      @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="sel1">
                                    <p> نوع القطعة</p>
                                    <div class="custom-select">
                                    <select name="sort_id">
                                      @foreach ($sorts as $sort)
                                        <option value="{{ $sort->id }}">{{ $sort->name }}</option>
                                      @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div class="sel1">
                                    <p> نوع العرض</p>
                                    <div class="custom-select">
                                    <select name="offer_id">
                                      @foreach ($offers as $offer)
                                        <option value="{{ $offer->id }}">{{ $offer->name }}</option>
                                      @endforeach
                                    </select>
                                    </div>
                                </div>

                                @if($adSort->name != 'global_estate' && $adSort->name != 'project_estate')

                                    <div class="sel1">
                                        <p>عدد الغرف</p>
                                        <div >
                                        <input type="number" name="rooms_number" value="{{ old('rooms_number') }}" min="0" id="">
                                        </div>
                                    </div>
                                    <div class="sel1">
                                        <p>عدد الحمامات</p>
                                        <div >
                                        <input type="number" name="bathrooms_number" value="{{ old('bathrooms_number') }}" min="0" id="">
                                        </div>
                                    </div>
                                    <div class="sel1">
                                        <p>مساحة العقار م٢</p>
                                        <div class="custom-select">
                                        <select name="space">
                                        <option>0 - 100</option>
                                        <option>100 - 500</option>
                                        <option>500 - 1000</option>
                                        <option>1000 - 1500</option>
                                        <option>1500 - 2000</option>
                                        <option>2000 - 3000</option>
                                        <option>3000 - 5000</option>
                                        <option>5000 - 7000</option>
                                        <option>7000 - 10000</option>
                                        </select>
                                        </div>
                                    </div>

                                    @if($adSort->name != 'auction_estate')
                                    <div class="sel1">
                                        <p>السعر</p>
                                        <div class="custom-select">
                                        <select name="price">
                                            <option>1000 - 2000 </option>
                                            <option>5000 - 3000 </option>
                                            <option>20000 - 6000 </option>
                                        </select>
                                        </div>
                                    </div>
                                    @endif

                                @endif

                                @endif

                                @if($adSort->name == 'project_estate')

                                    <div class="for-sel2">
                                        <div class="sel1" style="height:39px">
                                            <p> اسم المشروع العقاري </p>
                                            <input type="text" placeholder="اسم المشروع" style="width:120px">
                                        </div>
                                    </div>
                                    
                                @endif

                                @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')

                                    @include('main.estates.includes.search.local_estate')

                                @endif
                                
                                @if($adSort->name == 'auction_estate')
                                    <div class="sel1">
                                        <p> موعد المزاد العقاري</p>
                                        <input type="date" name="date" class="datein">
                                    </div>
                                @endif
                                
                            @endif
                                <div class="more-ser">
                                    <button class="btn btnspe" type="submit">ابدأ البحث</button>
                                    @if($adSort != 'general')
                                        @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')
                                            <button class="btn btn-more" onclick="moreSer();return false;"> بحث عن المزيد </button>
                                        @endif
                                    @endif
                                </div>      
                </div>            

                @if ($result)
                    @include('main.estates.includes.search.results')
                @endif
            </div>
        </div>
    </div>
</form>    

@endsection


@section('footer')

    <script>
    
        function moreSer() {
        var x = document.getElementById("showmore");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
        }
    </script>
    
@endsection