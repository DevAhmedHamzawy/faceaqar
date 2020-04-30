@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">أعمالنا</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button onclick="generateForm();return false;" class="btn btn-primary col-md-12"><span class="material-icons">add</span></button>
                    <br><br>

                    <form style="display: none;" class="form-group form-links">
                        <input type="text" class="form-control" id="name">
                        <br>
                        <input type="date" class="form-control" id="date">
                        <br>
                        <input type="file" class="form-control" id="file">
                        <br>
                        <button onclick="createPortfolio();return false;" class="btn btn-primary col-md-12">إضافة إلى الأعمال</button>
                    </form>
                    <br>
                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">الصورة</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($portfolios as $portfolio)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $portfolio->id }}</td>
                                    <td>{{ $portfolio->name  }}</td>
                                    <td><img src="{{ $portfolio->img_path }}" width="50" height="50"></td>
                                    <td>
                                        <form action="{{ route('portfolios.destroy', $portfolio->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    لم يتم إضافة أعمال
                                </li>
                            @endforelse
                        </table>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')

    <script>

        window.form_data = new FormData();

        $(document).on('change','#file',function(e){

        let file_data = $('#file').prop('files')[0];
        form_data.append('file', file_data);


        });
        
        function createPortfolio(){

            form_data.append('name', $("#name").val())
            form_data.append('date', $("#date").val())

            axios.post('../admin/portfolios', form_data)
            .then((response) => {
              
                window.location.reload();
            }).catch((error) => {
                if(error.response.data.errors.name){
                    $('.name-contact-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name').addClass('is-invalid')
                }

                if(error.response.data.errors.name){
                    $('.name-contact-error').append('<strong>'+error.response.data.errors.name+'</strong>');
                    $('.name').addClass('is-invalid')
                }
            })

        }


        function generateForm()
        {
            $('.form-links').css('display', 'block');
        }

    </script>
    
@endsection