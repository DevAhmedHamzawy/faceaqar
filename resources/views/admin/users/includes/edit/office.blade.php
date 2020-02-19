<div class="form-group row">
    <label for="center" class="col-md-2 col-form-label text-md-right">المركز</label>

    <div class="col-md-10">
        <input id="center" type="text" class="form-control @error('center') is-invalid @enderror" name="center" value="{{ $user->profile->center }}" required autocomplete="center" autofocus>

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
        <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ $user->profile->neighborhood }}" required autocomplete="neighborhood" autofocus>

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
        <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{ $user->profile->street }}" required autocomplete="street" autofocus>

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
        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="address">{{ $user->profile->address }}</textarea>

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
        <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ $user->profile->full_name }}" required autocomplete="full_name" autofocus>

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
        <input id="national_identity_img" type="file" class="form-control @error('national_identity_img') is-invalid @enderror" name="national_identity_img" value="{{ $user->profile->national_identity_img }}" required autocomplete="national_identity_img" autofocus>

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
        <input id="commercial_register_img" type="file" class="form-control @error('commercial_register_img') is-invalid @enderror" name="commercial_register_img" value="{{ $user->profile->commercial_register_img }}" required autocomplete="commercial_register_img" autofocus>

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
        <input id="office_name" type="text" class="form-control @error('office_name') is-invalid @enderror" name="office_name" value="{{ $user->profile->office_name }}" required autocomplete="office_name" autofocus>

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
        <textarea name="office_activity" id="office_activity" class="form-control @error('office_activity') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="office_activity">{{ $user->profile->office_activity }}</textarea>

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
        <textarea name="commercial_register_no" id="commercial_register_no" class="form-control @error('commercial_register_no') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="commercial_register_no">{{ $user->profile->commercial_register_no }}</textarea>

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
        <input id="youtube_video_link" type="text" class="form-control @error('youtube_video_link') is-invalid @enderror" name="youtube_video_link" value="{{ $user->profile->youtube_video_link }}" required autocomplete="youtube_video_link" autofocus>

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
        <input id="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ $user->profile->facebook }}" required autocomplete="facebook" autofocus>

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
        <input id="twitter" type="url" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ $user->profile->twitter }}" required autocomplete="twitter" autofocus>

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
        <input id="youtube" type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ $user->profile->youtube }}" required autocomplete="youtube" autofocus>

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
        <input id="instagram" type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ $user->profile->instagram }}" required autocomplete="instagram" autofocus>

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
        <input id="whatsapp" type="url" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $user->profile->whatsapp }}" required autocomplete="whatsapp" autofocus>

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
        <input id="snapchat" type="url" class="form-control @error('snapchat') is-invalid @enderror" name="snapchat" value="{{ $user->profile->snapchat }}" required autocomplete="snapchat" autofocus>

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
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror textarea" cols="30" rows="10" autocompleted="description">{{ $user->profile->description }}</textarea>

        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="mobile1" class="col-md-2 col-form-label text-md-right">1الجوال</label>

    <div class="col-md-10">
        <input id="mobile1" type="text" class="form-control @error('mobile1') is-invalid @enderror" name="mobile1" value="{{ $user->profile->mobile1 }}" required autocomplete="mobile1" autofocus>

        @error('mobile1')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="mobile2" class="col-md-2 col-form-label text-md-right">2الجوال</label>

    <div class="col-md-10">
        <input id="mobile2" type="text" class="form-control @error('mobile2') is-invalid @enderror" name="mobile2" value="{{ $user->profile->mobile2 }}" required autocomplete="mobile2" autofocus>

        @error('mobile2')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="telephone" class="col-md-2 col-form-label text-md-right">رقم الهاتف</label>

    <div class="col-md-10">
        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $user->profile->telephone }}" required autocomplete="telephone" autofocus>

        @error('telephone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="fax" class="col-md-2 col-form-label text-md-right">رقم الفاكس</label>

    <div class="col-md-10">
        <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ $user->profile->fax }}" required autocomplete="fax" autofocus>

        @error('fax')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="central" class="col-md-2 col-form-label text-md-right">رقم السنترال</label>

    <div class="col-md-10">
        <input id="central" type="text" class="form-control @error('central') is-invalid @enderror" name="central" value="{{ $user->profile->central }}" required autocomplete="central" autofocus>

        @error('central')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>


<div class="form-group row">
    <label for="website" class="col-md-2 col-form-label text-md-right">الموقع الإلكترونى</label>

    <div class="col-md-10">
        <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ $user->profile->website }}" required autocomplete="website" autofocus>

        @error('website')
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