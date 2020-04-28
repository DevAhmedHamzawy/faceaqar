@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>المحامين
                        <a href="{{ route('lawyers.create') }}" class="btn btn-primary" style="float:left"><span class="material-icons">add</span></a>
                    </h5>
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
                                    <th scope="col">العنوان</th>
                                    <th scope="col">الهاتف</th>
                                    <th scope="col">الفاكس</th>
                                    <!--<th scope="col">العمليات</th>!-->
                                </tr>
                            </thead>
                            @forelse ($lawyers as $lawyer)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $lawyer->id }}</td>
                                    <td>{{ $lawyer->name  }}</td>
                                    <td>{{ $lawyer->profile->address ?? 'غير موجود' }}</td>
                                    <td>{{ $lawyer->profile->telephone ?? 'غير موجود' }}</td>
                                    <td>{{ $lawyer->profile->fax ?? 'غير موجود' }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('lawyers.show', $lawyer->name) }}" class="btn btn-primary"><span class="material-icons">eye</span></a>
                                            &nbsp;
                                            <a href="{{ route('lawyers.edit', $lawyer->name) }}" class="btn btn-warning"><span class="material-icons">edit</span></a>
                                            &nbsp;
                                            <form action="{{ route('lawyers.destroy', $lawyer->name) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit"><span class="material-icons">delete</span></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    No lawyers Added
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