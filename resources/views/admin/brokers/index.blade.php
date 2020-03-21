@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    طلبات الوسيط الإلكترونى
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">البريد الإلكترونى</th>
                                    <th scope="col">الحالة</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            @forelse ($brokers as $broker)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $broker->name  }}</td>
                                    <td>{{ $broker->email }}</td>
                                    <td>{{ $broker->visible == 1 ? 'مفعل' : 'غير مفعل' }}</td>
                                    <td>
                                        {{--<a href="{{ route('users.show', $broker->user_name) }}" class="btn btn-primary">Show</a>--}}
                                        <a href="{{ route('brokers.activate', $broker->name) }}" class="btn btn-warning">تفعيل</a>
                                        <form action="{{ route('the-brokers.destroy', $broker->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    No users Added
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