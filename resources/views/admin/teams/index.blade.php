@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">فريق العمل</h4>
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
                        <select id="user_id" class="form-control">
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}">{{ $admin->user_name }}</option>
                            @endforeach
                        </select>
                        <br>
                        <button onclick="createTeam();return false;" class="btn btn-primary col-md-12">إضافة إلى الفريق</button>
                    </form>
                    <br>
                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($teams as $team)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $team->id }}</td>
                                    <td>{{ $team->user_name  }}</td>
                                    <td>
                                        <form action="{{ route('teams.destroy', $team->user_name) }}" method="post">
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
        
        function createTeam(){

            axios.post('../admin/teams', { user_id: $('#user_id').val() })
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