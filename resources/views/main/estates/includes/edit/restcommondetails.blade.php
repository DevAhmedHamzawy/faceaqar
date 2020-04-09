<div class="row">
    <div class="col-md-12">
        <h4>اكتب وصف اكثر عن {{ $adSort->title }} </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <textarea class="form-control" name="more_description" rows="6">{{ $estate->more_description }}</textarea>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h4>صور {{ $adSort->title }} </h4>
        @foreach ($estate->images as $key=>$img)
            <div class="col-md-2">
                <img src="{{ $img }}" width="150" height="150" id="{{$key}}" srcset="">
                <a href="javascript:void(0)" onclick="add({{$key}})"><span class="fa fa-times"></span>حذف</a>
            </div>
        @endforeach
        <div style="clear:both"></div>
        @if(count($estate->images) == 6)
        <div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم تجاوز الحد الأقصى من الصور !</div></div>
        @else
            <h4>ارفاق صور عن {{ $adSort->title }} </h4>
            <button class="btn btn-primary add-image" onclick="addImages();return false;">إضافة صور أخرى</button>
            <div class="form-group images-files">
                <br>
                <input type="file" name="estateimages[]" class="form-control" id="" placeholder="" accept="image/*">
            </div>
            <div class="images"></div>
            <div class="images-danger" style="margin-top:250px;display:none;"></div>
        @endif
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <h4>حدد موقع المخطط {{ $adSort->title }} الجغرافي على مخطط ماب</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="map" style="height:550px;"></div>
        <input type="hidden" name="latlng" id="latlng" />
    </div>
</div>
@if($adSort->name == 'auction_estate')
    @include('main.estates.includes.create.auction_estate')                
@endif
<div class="row">
    <div class="col-md-12">
        <h4> بيانات المعلن </h4>
    </div>
</div>
                    <div class="block_form_1">
    <div class="col-md-2">
        <label for="">اســم المعلن <em>*</em></label>
    </div>
    <div class="col-md-4">
        <input type="text" name="advertiser_name" value="{{ $estate->advertiser->advertiser_name }}" class="form-control" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label>اختر نوع المعلن <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control required" name="advertiser_sort_id">
            <option> اختر </option>
            <option value="1" @if($estate->advertiser->advertiser_sort_id == 1) selected @endif>مكتب عقاري</option>
            <option value="2" @if($estate->advertiser->advertiser_sort_id == 2) selected @endif>مطور عقارى  </option>
            <option value="3" @if($estate->advertiser->advertiser_sort_id == 3) selected @endif> شركة عقارية</option>
            <option value="4" @if($estate->advertiser->advertiser_sort_id == 4) selected @endif>مكتب مزاد عقاري</option>
            <option value="5" @if($estate->advertiser->advertiser_sort_id == 5) selected @endif>مكتب هندسي</option>
            <option value="6" @if($estate->advertiser->advertiser_sort_id == 6) selected @endif> مالك</option>
            <option value="7" @if($estate->advertiser->advertiser_sort_id == 7) selected @endif> وسيط </option>
            <option value="8" @if($estate->advertiser->advertiser_sort_id == 8) selected @endif> اخرى </option>
        </select>
    </div>

    <div class="col-md-2">
        <label for="">(1) رقــم الجوال <em>*</em></label>
    </div>
    <div class="col-md-4">
        <input type="text" name="mobile1" value="{{ $estate->advertiser->mobile1 }}" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">(2) رقــم الجوال </label>
    </div>
    <div class="col-md-4">
        <input type="text" name="mobile2" value="{{ $estate->advertiser->mobile2 }}" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">التلفون</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="telephone" value="{{ $estate->advertiser->telephone }}" class="form-control required" id="" placeholder="">
    </div>

    <div class="col-md-2">
        <label for="">فاكس</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="fax" value="{{ $estate->advertiser->fax }}" class="form-control required" id="" placeholder="">
    </div>
    
    <div class="col-md-2">
        <label for="">سنترال</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="central" value="{{ $estate->advertiser->central }}" class="form-control required" id="" placeholder="">
    </div>

    <div class="col-md-2">
        <label for="">البريد الإلكتروني</label>
    </div>
    <div class="col-md-4">
        <input type="email" name="email" value="{{ $estate->advertiser->email }}" class="form-control required" id="" placeholder="">
    </div>
    

    <div class="col-md-2">
        <label for="">الموقع  الإلكترونى</label>
    </div>
    <div class="col-md-4">
        <input type="text" name="website" value="{{ $estate->advertiser->website }}" class="form-control " id="" placeholder="">
    </div>

    <div class="col-md-12 text-center pd-top">
        <input type="checkbox" name="choice-type" id="checkbox1" >
        <label for="choice-type-number" class="imp-n-s">
هل ترغب تثبيت صفحتك الالكترونية في مقدمة الإعلانات الالكترونية في جميع صفحات مدينتك بالموقع؟
        </label>
        <span class="imp-n-s-2"><a href="{{ route('create-ticket', ['estate',$estate->ad_sort_id,$estate->name]) }}" style="color:#fff;"> إضافة رسوم مالية عند التثبيت </a></span>
        <div class="reveal-if-active" id="autoUpdate">
            <div class="row">
                <div class="col-md-3 hidden-xs"></div>
                <div class="col-md-2">
                    <label for="">اختر مدة التثبيت <em>*</em></label>
                </div>
                <div class="col-md-4">
                    <select class="form-control required" name="premium_id">
                        <option disabled> اختر </option>
                        <option value="1" @if($estate->premium_id == 1) selected @endif>15 يوم </option>
                        <option value="2" @if($estate->premium_id == 2) selected @endif>شهر</option>
                        <option value="3" @if($estate->premium_id == 3) selected @endif>3 شهور</option>
                        <option value="4" @if($estate->premium_id == 4) selected @endif>6 شهور</option>
                        <option value="5" @if($estate->premium_id == 5) selected @endif>سنه</option>
                    </select>
                </div>
                <div class="col-md-3 hidden-xs"></div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <br/>
        <h4> بيانات مدة إضافة صفحتك الإلكترونية بالموقع </h4>
    </div>
                        
    <div class="col-md-3 hidden-xs"></div>
    <div class="col-md-2">
        <label for=""> اختر مــدة الإضافة <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control required" name="duration_id">
            <option disabled>اختر</option>
            <option value="1" @if($estate->duration_id == 1) selected @endif>شهر</option>
            <option value="2" @if($estate->duration_id == 2) selected @endif>3 شهور</option>
            <option value="3" @if($estate->duration_id == 3) selected @endif>6 شهور</option>
            <option value="4" @if($estate->duration_id == 4) selected @endif>سنه</option>
        </select>
    </div>
    <div class="col-md-3 hidden-xs"></div>
    <div class="clearfix"></div>         
    <div class="col-md-4 hidden-xs"></div>
    <div class="col-md-4 add-code">
        {!! NoCaptcha::renderJs() !!}
        {!! NoCaptcha::display() !!}
    </div>
    
    <div class="col-md-3 hidden-xs"></div>
    <div class="col-md-12">
        <div class="checkbox form-group Terms_line text-right">
        <label>
            <input type="checkbox" name="agree">
اوافق على كافة الأحكام والشروط للموقع الإلكتروني والإلتزام بما جاء فيها.
        </label>
    </div>
    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            @if ($estate->visible == 0)
                            <button type="submit" name="action" value="add" class="btn btn-default btn_web">حفظ نهائى</button>
                            @endif
                            <button type="submit" name="action" value="edit" class="btn btn-default btn_web">تعديل</button>
                            <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                        </div>
                    </div>
</div>
</div>	
</form>
</div>

