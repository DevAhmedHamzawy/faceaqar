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
                        <select id="user_id">
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                        <button onclick="createTeam();return false;" class="btn btn-primary">Create team</button>
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
                            @forelse ($teams as $team)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $team->name  }}</td>
                                    <td>{{ $team->img }}</td>
                                    <td>
                                        <a href="{{ route('teams.show', $team->name) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('teams.edit', $team->name) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('teams.destroy', $team->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
        
        function createTeam(){

            axios.post('../admin/teams', { user_id: $('#user_id').val() })
            .then((response) => {
                $('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> تم إضافة عميل جديد بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                }, 2000);
                //console.log(response);
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