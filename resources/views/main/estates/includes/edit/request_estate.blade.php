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
        <input type="text" name="name" value="{{ $estate->name }}" class="form-control" id="" placeholder="اكتب نص ">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="">اختر نوع العقار <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control selectOption" name="category_id" required>
            <option value="choose">اختر</option>
            @foreach ($bladeVariables['categories'] as $category)
                <option value="{{ $category->id }}" @if($estate->category_id == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
  <div class="col-md-2">
        <label for="">اختر نوع القطعة <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control" name="sort_id" required>
            <option value="">اختر</option>
            @foreach ($bladeVariables['sorts'] as $sort)
                <option value="{{ $sort->id }}" @if($estate->sort_id == $sort->id) selected @endif>{{ $sort->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <label for="">اختر نوع الطلب <em>*</em></label>
    </div>
    <div class="col-md-4">
        <select class="form-control" name="offer_id">
            <option value="choose">اختر</option>
            @foreach ($bladeVariables['offers'] as $offer)
                <option value="{{ $offer->id }}" @if($estate->offer_id == $offer->id) selected @endif>{{ $offer->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <label for="">عدد الغرف </label>
    </div>
    <div class="col-md-4">
        <input type="number" min="0" name="rooms_number" value="{{ $bladeVariables['request_estate']->rooms_number  }}" class="form-control">
    </div>

    <div class="col-md-2">
        <label for="">عدد الحمامات</label>
    </div>
    <div class="col-md-4">
        <input type="number" min="0" name="bathrooms_number" value="{{ $bladeVariables['request_estate']->bathrooms_number  }}" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="">  مساحة العقار م٢ </label>
    </div>
    <div class="col-md-4">
        <input type="number" name="estate_space" value="{{ $bladeVariables['request_estate']->estate_space  }}" class="form-control" id="" placeholder="مساحة العقار م٢">
    </div>
    <div class="col-md-2">
        <label for=""> السعر </label>
    </div>
    <div class="col-md-4">
        <input type="number" name="price" value="{{ $bladeVariables['request_estate']->price  }}" class="form-control" id="" placeholder="السعر">
    </div>
    
</div>