@extends('admin.layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header"> <h5 class="text-center">{{ $page->title }}</h5> </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <button onclick="generateForm();return false;" class="btn btn-primary col-md-12"><span class="material-icons">edit</span></button>
                        <br><br>

                        <form method="POST" action="{{ route('pages.update', [$page->id, null]) }}" style="display: none;" class="form-group form-links">
                            @csrf
                            @method('PATCH')

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <input id="title" type="text" placeholder="إسم الصفحة" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $page->title }}" required autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">

                                    <textarea name="body" id="body" placeholder="محتوى الصفحة" class="form-control @error('body') is-invalid @enderror textarea" cols="30" rows="10" required autocompleted="body">{{ $page->body }}</textarea>
                                    
                                    @error('body')
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

                        <h4 class="text-center mt-5">الصفحات</h4>
                        <table class="table table-striped table-dark mt-5">

                            <a href="{{ route('pages.create', $page->id) }}" class="btn btn-primary col-md-12 mt-5"><span class="material-icons">add</span></a>

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">إسم الصفحة</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($childPages as $childpage)
                            <tbody>
                                <tr>
                                  <td scope="row">{{ $childpage->id }}</td>
                                    <td>{{ $childpage->title  }}</td>
                                    <td>
                                        <div class="row">
                                            <button class="btn btn-warning" type="submit"><a href="{{ route('pages.edit', [$page->id, $childpage->id]) }}">تعديل</a></button>
                                            &nbsp;&nbsp;
                                            <form action="{{ url('admin/pages/'.$childpage->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                            </form>
                                        </div>
                                       
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item mt-5">
                                   لم يتم إضافة صفحات 
                                </li>
                            @endforelse
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        function generateForm()
        {
            $('.form-links').css('display', 'block');
        }
    </script>
@endsection