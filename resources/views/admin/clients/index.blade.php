@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <input type="text" id="name">
                        <input type="file" id="file">
                        <button onclick="createClient();return false;" class="btn btn-primary">Create client</button>
                    </form>

                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            @forelse ($clients as $client)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $client->name  }}</td>
                                    <td>{{ $client->img }}</td>
                                    <td>
                                        {{--<a href="{{ route('clients.show', $client->name) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('clients.edit', $client->name) }}" class="btn btn-warning">Edit</a>--}}
                                        <form action="{{ route('clients.destroy', $client->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
                /*$('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> تم إضافة عميل جديد بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                }, 2000);*/
                //console.log(response);
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

    </script>
    
@endsection