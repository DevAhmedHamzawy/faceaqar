@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    المحامين
                    <a href="{{ route('lawyers.create') }}" class="btn btn-primary" style="float:left">إضافة محامى جديد</a>
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
                                    <th scope="col">رقم الجوال</th>
                                    <th scope="col">رقم الهاتف</th>
                                    <th scope="col">رقم الفاكس</th>
                                    <!--<th scope="col">العمليات</th>!-->
                                </tr>
                            </thead>
                            @forelse ($lawyers as $lawyer)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $lawyer->name  }}</td>
                                    <td>{{ $lawyer->profile->address ?? 'غير موجود' }}</td>
                                    <td>{{ $lawyer->profile->mobile ?? 'غير موجود' }}</td>
                                    <td>{{ $lawyer->profile->telephone ?? 'غير موجود' }}</td>
                                    <td>{{ $lawyer->profile->fax ?? 'غير موجود' }}</td>
                                    <td>
                                        {{--<a href="{{ route('lawyers.show', $lawyer->name) }}" class="btn btn-primary">عرض</a>--}}
                                        {{--<a href="{{ route('lawyers.edit', $lawyer->name) }}" class="btn btn-warning">Edit</a>--}}
                                        {{--<form action="{{ route('lawyers.destroy', $lawyer->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
                                        </form>--}}
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