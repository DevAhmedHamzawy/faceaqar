<div class="form-group row">
    <label for="mobile1" class="col-md-2 col-form-label text-md-right">1الجوال</label>

    <div class="col-md-10">
        <input id="mobile1" type="text" class="form-control @error('mobile1') is-invalid @enderror" name="mobile1" value="{{ old('mobile1') }}"  >

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
        <input id="mobile2" type="text" class="form-control @error('mobile2') is-invalid @enderror" name="mobile2" value="{{ old('mobile2') }}"  >

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
        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}"  >

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
        <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}"  >

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
        <input id="central" type="text" class="form-control @error('central') is-invalid @enderror" name="central" value="{{ old('central') }}"  >

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
        <input id="website" type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}"  >

        @error('website')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

