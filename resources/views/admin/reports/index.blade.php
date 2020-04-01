@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    بلاغات العقارات بالموقع 
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped table-dark data-table">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">إسم العقار</th>
                                    <th scope="col">التقييمات الإيجابية</th>
                                    <th scope="col">التقييمات السلبية</th>
                                    <th scope="col">مفضلة</th>
                                    <th scope="col">عدد مرات البلاغات</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            
                        </table>
                       
                    </ul>
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
        ajax: "{{ route('reports.index') }}",
        columns: [
            {data: 'code', name: 'code'},
            {data: 'name', name: 'name'},
            {data: 'likes_count', name: 'likes_count'},
            {data: 'favourites_count', name: 'favourites_count'},
            {data: 'dislikes_count', name: 'dislikes_count'},
            {data: 'reports_count', name: 'reports_count'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        dom: 'lBfrtip',
        "order": [[ 5, "desc" ]]
    });
    
  });


  $.fn.dataTable.ext.errMode = 'none';

    

    </script>
@endsection