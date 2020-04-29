@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">إعلانات الوسيط بالموقع</h4> 
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-dark data-table">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الإسم</th>
                                <th scope="col">النوع</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">العمليات</th>
                                <th scope="col">العمليات</th>
                            </tr>
                        </thead>
                          
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
    <script type="text/javascript">

$(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('thebrokers.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'broker_ad_sort', name: 'broker_ad_sort'},
            {data: 'visible_status', name: 'visible_status'},
            {data: 'activate', name: 'activate', orderable: false, searchable: false},
            {data: 'delete', name: 'delete', orderable: false, searchable: false},
        ],
        dom: 'lBfrtip',
    });
    
  });


  $.fn.dataTable.ext.errMode = 'none';

    

    </script>
@endsection