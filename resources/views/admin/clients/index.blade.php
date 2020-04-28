@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">عملائنا</h4>
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
                        <input type="text" id="name" class="form-control">
                        <br>
                        <input type="file" id="file" class="form-control">
                        <br>
                        <button onclick="createClient();return false;" class="btn btn-primary col-md-12">إضافة عميل جديد</button>
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
                            @forelse ($clients as $client)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $client->id }}</td>
                                    <td>{{ $client->name  }}</td>
                                    <td><img src="{{ $client->img_path }}" width="50" height="50" alt="" srcset=""></td>
                                    <td>
                                        <form action="{{ route('clients.destroy', $client->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    لم يتم إضافة عملاء
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
        
        function createClient(){

            form_data.append('name', $("#name").val())

            axios.post('../admin/clients', form_data)
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