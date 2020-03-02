@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    العقارات بالموقع 
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
                                    <th scope="col">إسم العقار</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($estates as $estate)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $estate->name  }}</td>
                                    <td>
                                        <form action="{{ url('admin/estates/'.$estate->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                   لم يتم إضافة عقارات 
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