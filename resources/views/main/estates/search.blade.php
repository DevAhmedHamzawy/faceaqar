@extends('main.layouts.app')




@section('content')

<form method="get" action="{{ route('getresults') }}" id="filtersform">
    <div class="all-ser-pages">
            <div class="container">
                            <div class="center-sepag ser-pages">
                                <h2>البحث عن {{ $adSort->adjective ?? 'العقارات' }} بالموقع</h2>
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
                                <div class="sel1">
                                    <p> المركز</p>
                                    <input type="text" name="center" placeholder="اسم المركز">
                                </div>

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

                                @include('main.estates.includes.search.project_estate')


                                <div class="sel1">
                                    <p> إسم المخطط</p>
                                    <input type="text" name="schema" placeholder="إسم المخطط">
                                </div>
                                @include('main.estates.includes.search.local_estate')


                                <div class="more-ser">
                                    <button class="btn btnspe" type="submit">ابدأ البحث</button>
                                   <button class="btn btn-more" onclick="moreSer();return false;"> بحث عن المزيد </button>
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