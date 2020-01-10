		<!-- title_pages -->
        <div class="title_pages">
            <h2>تعبئة بيانات لإضافة {{ $adSort->title }} </h2>
            <span></span>
        </div>
        <!-- end_title_pages -->

        <div class="add_auctions">
            <h4> بيانات عنوان {{ $adSort->title }}  </h4>
            <form method="post" action="{{ route('estates.create' , $adSort->name) }}">
                @csrf
                <div class="block_form_1 row">
                    <div class="row">
                        <div class="col-md-2">
                            <label for=""> اختر اسم المنطقة <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control selectOption required" required>
                                <option value="choose">اختر المنطقة</option>
                                <option value="images">الرياض</option>
                                <option value="images">المدينة</option>
                            </select>											
                        </div>
                        <div class="col-md-2">
                            <label for=""> اختر اسم المدينة  <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control selectOption required" name="area_id" required>
                                <option value="choose">اختر المدينة</option>
                                <option value="183">الرياض</option>
                                <option value="178">المدينة</option>
                            </select>													
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">  اسم المركز </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="center" value="{{ old('center') }}" class="form-control " id="" placeholder="">
                        </div>
                        
                        <div class="col-md-2">
                            <label for="">  اسم الحى <em>*</em></label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="neighborhood" value="{{ old('neighborhood') }}" class="form-control required" id="" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="">  اسم الشارع </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="street" value="{{ old('street') }}" class="form-control" id="" placeholder="">
                        </div>
                        <div class="col-md-2">
                            <label for="">  العنوان التفصيلي  </label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="" placeholder="">
                        </div>
                    </div>