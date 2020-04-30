@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    مستخدمين الموقع
                    <a href="{{ route('users.create') }}" class="btn btn-primary" style="float:left">إضافة مستخدم جديد</a>
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
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($users as $user)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $user->name  }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="row">
                                            @if($user->blacklist == 0)
                                               <a href="{{ route("blacklist", [$user->id,'user']) }}"  class="btn btn-warning btn-sm">حظر</a>
                                            @else
                                               <a href="{{ route("unblacklist", [$user->id,'user']) }}"  class="btn btn-warning btn-sm">فك الحظر</a>
                                            @endif
                                            &nbsp;
                                            <form action="{{ route('users.destroy', $user->name) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">حذف</button>
                                            </form>
                                        </div>
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