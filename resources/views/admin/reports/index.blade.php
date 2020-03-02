@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    إبلاغات الموقع 
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
                                    <th scope="col">عدد مرات الإبلاغات</th>
                                </tr>
                            </thead>
                            @forelse ($reports as $report)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $report[0]->estate->name ?? 'غير محدد'  }}</td>
                                    <td>{{ count($report) }}</td>
                                    
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