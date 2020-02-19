<div class="office" style="display:none;">

<div class="form-group row">
    <label for="center" class="col-md-2 col-form-label text-md-right">المركز</label>

    <div class="col-md-10">
        <input id="center" type="text" class="form-control @error('center') is-invalid @enderror" name="center" value="{{ old('center') }}"  >

        @error('center')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="neighborhood" class="col-md-2 col-form-label text-md-right">الحى</label>

    <div class="col-md-10">
        <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ old('neighborhood') }}"  >

        @error('neighborhood')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="street" class="col-md-2 col-form-label text-md-right">الشارع</label>

    <div class="col-md-10">
        <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') }}"  >

        @error('street')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="address" class="col-md-2 col-form-label text-md-right">العنوان</label>

    <div class="col-md-10">
        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="address">{{ old('address') }}</textarea>

        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="full_name" class="col-md-2 col-form-label text-md-right">الإسم بالكامل</label>

    <div class="col-md-10">
        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}"  >

        @error('full_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="national_identity_img" class="col-md-2 col-form-label text-md-right">صورة الهوية الوطنية</label>

    <div class="col-md-10">
        <input id="national_identity_img" type="file" class="form-control @error('national_identity_img') is-invalid @enderror" name="national_identity_img" value="{{ old('national_identity_img') }}"  >

        @error('national_identity_img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="commercial_register_img" class="col-md-2 col-form-label text-md-right">صورة السجل التجارى</label>

    <div class="col-md-10">
        <input id="commercial_register_img" type="file" class="form-control @error('commercial_register_img') is-invalid @enderror" name="commercial_register_img" value="{{ old('commercial_register_img') }}"  >

        @error('commercial_register_img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="office_name" class="col-md-2 col-form-label text-md-right">إسم المكتب التجارى</label>

    <div class="col-md-10">
        <input id="office_name" type="text" class="form-control @error('office_name') is-invalid @enderror" name="office_name" value="{{ old('office_name') }}"  >

        @error('office_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="office_activity" class="col-md-2 col-form-label text-md-right">نشاط المكتب العقارى</label>

    <div class="col-md-10">
        <textarea name="office_activity" id="office_activity" class="form-control @error('office_activity') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="office_activity">{{ old('office_activity') }}</textarea>

        @error('office_activity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="commercial_register_no" class="col-md-2 col-form-label text-md-right">رقم النشاط التجارى</label>

    <div class="col-md-10">
        <textarea name="commercial_register_no" id="commercial_register_no" class="form-control @error('commercial_register_no') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="commercial_register_no">{{ old('commercial_register_no') }}</textarea>

        @error('commercial_register_no')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="youtube_video_link" class="col-md-2 col-form-label text-md-right">رابط فيديو اليوتيوب</label>

    <div class="col-md-10">
        <input id="youtube_video_link" type="text" class="form-control @error('youtube_video_link') is-invalid @enderror" name="youtube_video_link" value="{{ old('youtube_video_link') }}"  >

        @error('youtube_video_link')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="facebook" class="col-md-2 col-form-label text-md-right">{{ __('Facebook') }}</label>

    <div class="col-md-10">
        <input id="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ old('facebook') }}"  >

        @error('facebook')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="twitter" class="col-md-2 col-form-label text-md-right">{{ __('twitter') }}</label>

    <div class="col-md-10">
        <input id="twitter" type="url" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ old('twitter') }}"  >

        @error('twitter')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="youtube" class="col-md-2 col-form-label text-md-right">{{ __('youtube') }}</label>

    <div class="col-md-10">
        <input id="youtube" type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ old('youtube') }}"  >

        @error('youtube')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="instagram" class="col-md-2 col-form-label text-md-right">{{ __('instagram') }}</label>

    <div class="col-md-10">
        <input id="instagram" type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ old('instagram') }}"  >

        @error('instagram')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="whatsapp" class="col-md-2 col-form-label text-md-right">{{ __('whatsapp') }}</label>

    <div class="col-md-10">
        <input id="whatsapp" type="url" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ old('whatsapp') }}"  >

        @error('whatsapp')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="snapchat" class="col-md-2 col-form-label text-md-right">{{ __('snapchat') }}</label>

    <div class="col-md-10">
        <input id="snapchat" type="url" class="form-control @error('snapchat') is-invalid @enderror" name="snapchat" value="{{ old('snapchat') }}"  >

        @error('snapchat')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-2 col-form-label text-md-right">الوصف</label>

    <div class="col-md-10">
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="description">{{ old('description') }}</textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <h4>حدد موقع  المكتب العقارى الجغرافي على مخطط ماب</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div id="map" style="height:550px;"></div>
        <input type="hidden" name="latlng" id="latlng" />
    </div>
</div>



</div>