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