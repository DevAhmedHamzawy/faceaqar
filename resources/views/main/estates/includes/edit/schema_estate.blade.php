<div class="row">
    <div class="col-md-12">
        <h4> بيانات عن {{ $adSort->title }} </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for=""> اسم {{ $adSort->title }}  <em>*</em></label>								
    </div>
    <div class="col-md-10">
        <input type="text" class="form-control" name="name" value={{ $estate->name }} id="" placeholder="اكتب نص">
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <label for="">إضافة فيديو يوتيوب</label>
    </div>
    <div class="col-md-10">
        <input type="text" name="youtube" value="{{ $estate->youtube }}" class="form-control" id="" placeholder="انسخ رابط الكتروني لفيديو اليوتيوب">
    </div>
</div>