<div class="col-md-12">
    <h4> بيانات عن {{ $adSort->title }} </h4>
</div>
<div class="col-md-2">
    <label for="">  اسم {{ $adSort->title }}  <em>*</em></label>
</div>
<div class="col-md-10">
    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="" placeholder="اكتب نص">
</div>
<div class="col-md-2">
    <label for="">اختر نوع العقار <em>*</em></label>
</div>
<div class="col-md-4">
    <select class="form-control selectOption required" name="category_id" required>
        <option value="choose">اختر نوع العقار</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
<div class="col-md-2">
    <label for="">اختر نوع القطعة <em>*</em></label>
</div>
<div class="col-md-4">
    <select class="form-control required" name="sort_id" required>
        <option value="">اختر</option>
        @foreach ($sorts as $sort)
            <option value="{{ $sort->id }}">{{ $sort->name }}</option>
        @endforeach
    </select>
</div>

<div class="col-md-2">
    <label for="">اختر نوع العرض <em>*</em></label>
</div>
<div class="col-md-4">
    <select class="form-control required" name="offer_id" required>
        <option value="">اختر</option>
        @foreach ($offers as $offer)
            <option value="{{ $offer->id }}">{{ $offer->name }}</option>
        @endforeach
    </select>
</div>

<div class="col-md-2">
    <label for="">إضافة فيديو يوتيوب </label>
</div>
<div class="col-md-4">
    <input type="text" name="youtube" value="{{ old('youtube') }}" class="form-control" id="" placeholder="انسخ الرابط الالكتروني لفيديو اليوتيوب">
</div>