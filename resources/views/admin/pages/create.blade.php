@extends('admin.layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header"> <h5 class="text-center">{{ $mainPage->title }} إضافة صفحة جديدة لقسم</h5> </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('pages.store', $mainPage->id) }}">
                            @csrf
                            
                            <input type="hidden" name="parent_id" value="{{ $mainPage->id }}">

                            <div class="form-group row">
                                <label for="title" class="col-md-2 col-form-label text-md-right">إسم الصفحة</label>

                                <div class="col-md-10">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="body" class="col-md-2 col-form-label text-md-right">محتوى الصفحة</label>

                                <div class="col-md-10">

                                    <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="body"></textarea>
                                    
                                    @error('body')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    إضافة صفحة جديدة
                                </button>
                            </div>
                        </form>


                    
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection