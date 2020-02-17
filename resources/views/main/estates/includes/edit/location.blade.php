		<!-- title_pages -->
        <div class="title_pages">
            <h2>تعبئة بيانات لإضافة {{ $adSort->title }} </h2>
            <span></span>
        </div>
        <!-- end_title_pages -->
        
        <div class="add_auctions">
            <h4> بيانات عنوان {{ $adSort->title }}  </h4>
            <form action="{{ route('estates.update' , [$adSort->name, $estate->name]) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="block_form_1 row">
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""> اختر اسم الدولة <em>*</em></label>
                        </div>
                        <div class="col-md-10">
                            <select class="form-control selectOption required" onchange="getCities(this);" required>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->name }}">{{ $area->name }}</option>
                                @endforeach
                            </select>											
                        </div>
                        <div class="col-md-2">
                            <label for=""> اختر اسم المنطقة <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control selectOption required" id="cities" onchange="getSubCities(this);" required>
                                <option value="choose">اختر المنطقة</option>
                                
                            </select>											
                        </div>
                        <div class="col-md-2">
                            <label for=""> اختر اسم المدينة  <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control selectOption required" name="area_id" id="area_id" required>
                                <option value="choose">اختر المدينة</option>
                                
                            </select>													
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">  اسم المركز </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="center" value="{{ $estate->center }}" class="form-control " id="" placeholder="">
                        </div>
                        
                        <div class="col-md-2">
                            <label for="">  اسم الحى <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="neighborhood" value="{{ $estate->neighborhood }}" class="form-control required" id="" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">  اسم الشارع </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="street" value="{{ $estate->street }}" class="form-control" id="" placeholder="">
                        </div>
                        <div class="col-md-2">
                            <label for="">  العنوان التفصيلي  </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="address" value="{{ $estate->address }}" class="form-control" id="" placeholder="">
                        </div>
                    </div>