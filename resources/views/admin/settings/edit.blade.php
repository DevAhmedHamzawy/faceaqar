@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            @if($sort == 'main')

                <div class="card">
                    <div class="card-header"> <h5 class="text-center">إسم الموقع</h5> </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">إسم الموقع</label>

                                <div class="col-md-10">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $settings->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    تغيير الإسم
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">

                    <div class="card-header"><h5 class="text-center">بيانات التواصل</h5></div>

                    <div class="card-body">

                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label text-md-right">العنوان</label>

                            <div class="col-md-10">
                                <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="address">{{ $settings->address }}</textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telephone" class="col-md-2 col-form-label text-md-right">رقم التليفون</label>

                            <div class="col-md-10">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ $settings->telephone }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="central" class="col-md-2 col-form-label text-md-right">رقم السنترال</label>

                            <div class="col-md-10">
                                <input id="central" type="text" class="form-control @error('central') is-invalid @enderror" name="central" value="{{ $settings->central }}" required autocomplete="central">

                                @error('central')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fax" class="col-md-2 col-form-label text-md-right">رقم الفاكس</label>

                            <div class="col-md-10">
                                <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ $settings->fax }}" required autocomplete="fax">

                                @error('fax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="postal_code" class="col-md-2 col-form-label text-md-right">الرمز البريدى</label>

                            <div class="col-md-10">
                                <input id="postal_code" type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ $settings->postal_code }}" required autocomplete="postal_code">

                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">البريد الإلكترونى</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $settings->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                تعديل بيانات التواصل
                            </button>
                        </div>

                    </div>

                </div>

                <div class="card">
                    <div class="card-header">{{ __('ddddfferfe') }}</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="file" class="col-md-2 col-form-label text-md-right">{{ __('File') }}</label>

                                <div class="col-md-10">
                                    <input type="file" name="logo1" id="file">

                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-2 col-form-label text-md-right">{{ __('File') }}</label>

                                <div class="col-md-10">
                                    <input type="file" name="logo2" id="file2">

                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="file" class="col-md-2 col-form-label text-md-right">{{ __('File') }}</label>

                                <div class="col-md-10">
                                    <input type="file" name="qr" id="qr">

                                    @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('settings') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="text-center">صفحة عن الموقع</h5></div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="facebook" class="col-md-2 col-form-label text-md-right">{{ __('Facebook') }}</label>

                                <div class="col-md-10">
                                    <input id="facebook" type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ $settings->facebook }}" required autocomplete="facebook" autofocus>

                                    @error('facebook')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="googleplus" class="col-md-2 col-form-label text-md-right">{{ __('googleplus') }}</label>

                                <div class="col-md-10">
                                    <input id="googleplus" type="url" class="form-control @error('googleplus') is-invalid @enderror" name="googleplus" value="{{ $settings->googleplus }}" required autocomplete="googleplus" autofocus>

                                    @error('googleplus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="youtube" class="col-md-2 col-form-label text-md-right">{{ __('youtube') }}</label>

                                <div class="col-md-10">
                                    <input id="youtube" type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ $settings->youtube }}" required autocomplete="youtube" autofocus>

                                    @error('youtube')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="twitter" class="col-md-2 col-form-label text-md-right">{{ __('twitter') }}</label>

                                <div class="col-md-10">
                                    <input id="twitter" type="url" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ $settings->twitter }}" required autocomplete="twitter" autofocus>

                                    @error('twitter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="telegram" class="col-md-2 col-form-label text-md-right">{{ __('telegram') }}</label>

                                <div class="col-md-10">
                                    <input id="telegram" type="url" class="form-control @error('telegram') is-invalid @enderror" name="telegram" value="{{ $settings->telegram }}" required autocomplete="telegram" autofocus>

                                    @error('telegram')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="whatsapp" class="col-md-2 col-form-label text-md-right">{{ __('whatsapp') }}</label>

                                <div class="col-md-10">
                                    <input id="whatsapp" type="url" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="{{ $settings->whatsapp }}" required autocomplete="whatsapp" autofocus>

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
                                    <input id="snapchat" type="url" class="form-control @error('snapchat') is-invalid @enderror" name="snapchat" value="{{ $settings->snapchat }}" required autocomplete="snapchat" autofocus>

                                    @error('snapchat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="linkedin" class="col-md-2 col-form-label text-md-right">{{ __('linkedin') }}</label>

                                <div class="col-md-10">
                                    <input id="linkedin" type="url" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ $settings->linkedin }}" required autocomplete="linkedin" autofocus>

                                    @error('linkedin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    تعديل بيانات مواقع التواصل الإجتماعى
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="text-center">روابط التطبيق على متاجر الجوال</h5></div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">
                                <label for="play_store" class="col-md-2 col-form-label text-md-right">{{ __('play store') }}</label>

                                <div class="col-md-10">
                                    <input id="play_store" type="url" class="form-control @error('play_store') is-invalid @enderror" name="play_store" value="{{ $settings->play_store }}" required autocomplete="play_store" autofocus>

                                    @error('play_store')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="app_store" class="col-md-2 col-form-label text-md-right">{{ __('app store') }}</label>

                                <div class="col-md-10">
                                    <input id="app_store" type="url" class="form-control @error('app_store') is-invalid @enderror" name="app_store" value="{{ $settings->app_store }}" required autocomplete="app_store" autofocus>

                                    @error('app_store')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="microsoft_store" class="col-md-2 col-form-label text-md-right">{{ __('microsoft store') }}</label>

                                <div class="col-md-10">
                                    <input id="microsoft_store" type="url" class="form-control @error('microsoft_store') is-invalid @enderror" name="microsoft_store" value="{{ $settings->microsoft_store }}" required autocomplete="microsoft_store" autofocus>

                                    @error('microsoft_store')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    تعديل روابط التطبيق على متاجر الجوال
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            @endif

            @if($sort == 'about')
                <div class="card">
                    <div class="card-header"><h5 class="text-center">صفحة عن الموقع</h5></div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <textarea name="about" id="about" class="form-control @error('about') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="about">{{ $settings->about }}</textarea>

                                    @error('about')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    تعديل
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif


            @if($sort == 'terms')
                <div class="card">
                    <div class="card-header"><h5 class="text-center">شروط الموقع</h5></div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <textarea name="terms" id="terms" class="form-control @error('terms') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="terms">{{ $settings->terms }}</textarea>

                                    @error('terms')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    تعديل
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            @endif


            @if($sort == 'services')
            <div class="card">
                <div class="card-header"><h5 class="text-center">خدماتنا</h5></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea name="services" id="services" class="form-control @error('services') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="services">{{ $settings->services }}</textarea>

                                @error('services')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                تعديل
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif

            @if($sort == 'branches')
            <div class="card">
                <div class="card-header"><h5 class="text-center">فروعنا</h5></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea name="branches" id="branches" class="form-control @error('branches') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="branches">{{ $settings->branches }}</textarea>

                                @error('branches')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                تعديل
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif

            @if($sort == 'financial_fees')
            <div class="card">
                <div class="card-header"><h5 class="text-center">الرسوم المالية</h5></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea name="financial_fees" id="financial_fees" class="form-control @error('financial_fees') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="financial_fees">{{ $settings->financial_fees }}</textarea>

                                @error('financial_fees')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                تعديل
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif


            @if($sort == 'payment_methods')
            <div class="card">
                <div class="card-header"><h5 class="text-center">الرسوم المالية</h5></div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('settings.update', $settings->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row">

                            <div class="col-md-12">
                                <textarea name="payment_methods" id="payment_methods" class="form-control @error('payment_methods') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="payment_methods">{{ $settings->payment_methods }}</textarea>

                                @error('payment_methods')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary col-md-12">
                                تعديل
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection