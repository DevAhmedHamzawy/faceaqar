@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">التثبيت والإضافة للعقارات</h4> 
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
                                <th scope="col">التثبيت</th>
                                <th scope="col">المتبقى</th>
                                <th scope="col">الحالة</th>
                                <th scope="col">الإضافة</th>
                                <th scope="col">المتبقى</th>
                                <th scope="col">العمليات</th>
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
        ajax: "{{ route('estates.addingpremium') }}",
        columns: [
            {data: 'code', name: 'code'},
            {data: 'name', name: 'name'},
            {data: 'premium', name: 'premium'},
            {data: 'premiumRemains', name: 'premiumRemains'},
            {data: 'approval', name: 'approval'},
            {data: 'duration', name: 'duration'},
            {data: 'durationRemains', name: 'durationRemains'},
            {data: 'edit', name: 'edit', orderable: false, searchable: false},
            {data: 'paymentshow', name: 'paymentshow', orderable: false, searchable: false},
            {data: 'destroy', name: 'destroy', orderable: false, searchable: false},

        ],
        dom: 'lBfrtip',
    });
    
  });


  $.fn.dataTable.ext.errMode = 'none';

    

    </script>
@endsection