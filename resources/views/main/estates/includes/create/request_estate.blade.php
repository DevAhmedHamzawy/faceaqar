<div class="row">
    <div class="col-md-12">
        <h4> بيانات عن {{ $adSort->title }}  </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="">  اسم {{ $adSort->title }}  <em>*</em></label>
    </div>
    <div class="col-md-10">
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="" placeholder="اكتب نص ">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="">اختر نوع العقار <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control selectOption" name="category_id" required>
            <option value="choose">اختر</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
  <div class="col-md-2">
        <label for="">اختر نوع القطعة <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control" name="sort_id" required>
            <option value="">اختر</option>
            @foreach ($sorts as $sort)
                <option value="{{ $sort->id }}">{{ $sort->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <label for="">اختر نوع الطلب <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control" name="offer_id">
            <option value="choose">اختر</option>
            @foreach ($offers as $offer)
                <option value="{{ $offer->id }}">{{ $offer->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <label for="">عدد الغرف </label>
    </div>
    <div class="col-md-4">
        <input type="number" min="0" name="rooms_number" value="{{ old('rooms_number') }}" class="form-control">
    </div>

    <div class="col-md-2">
        <label for="">عدد الحمامات</label>
    </div>
    <div class="col-md-4">
        <input type="number" min="0" name="bathrooms_number" value="{{ old('bathrooms_number') }}" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="">  مساحة العقار م٢ </label>
    </div>
    <div class="col-md-4">
        <input type="number" name="space" value="{{ old('space') }}" class="form-control" id="" placeholder="مساحة العقار م٢">
    </div>
    <div class="col-md-2">
        <label for=""> السعر </label>
    </div>
    <div class="col-md-4">
        <input type="number" name="price" value="{{ old('price')}}" class="form-control" id="" placeholder="السعر">
    </div>
    
</div>