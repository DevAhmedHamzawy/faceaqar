@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form>
                        <select id="place" onchange="getpositions(this);">
                            <option selected disabled>اختر المكان ....</option>
                            <option value="menu1">العنوان الرئيسى للقائمة</option>
                            <option value="menu2">العنوان الفرعى للقائمة</option>
                            <option value="footer1">1ذيل الصفحة</option>
                            <option value="footer2">ذيل الصفحة2</option>
                        </select>

                        <input type="text" id="name">
                       
                        <select id="position">
                            <option selected disabled>إختر الترتيب ....</option>
                        </select>
                        <select id="visible">
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>

                        <div id="form-links"></div>
                        <button onclick="createLink();return false;" class="btn btn-primary">Create link</button>
                    </form>

                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            @forelse ($links as $link)
                            <tbody>
                                <tr>
                                    <td scope="row">#</td>
                                    <td>{{ $link->name  }}</td>
                                    <td>{{ $link->img }}</td>
                                    <td>
                                        {{--<a href="{{ route('links.show', $link->name) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('links.edit', $link->name) }}" class="btn btn-warning">Edit</a>--}}
                                        <form action="{{ route('links.destroy', $link->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                            @empty
                                <li class="list-group-item">
                                    لم يتم إضافة عملاء
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

        
        
        

        function getpositions(item){

            switch (item.value) {
                case 'footer1' || 'footer2':

                    $('#form-links').empty();

                    $('#form-links').append('<select id="page_id"></select>');

                    @foreach ($pages as $page)
                    $('#page_id').append('<option value="{{ $page->id }}">{!! $page->title !!}</option>');
                    @endforeach

                    break;
                
                case 'menu2':

                $('#form-links').empty();

                $('#form-links').append('<select id="parent_id"></select>');

                @foreach ($menuone as $link)
                $('#parent_id').append('<option value="{{ $link->id }}">{!! $link->name !!}</option>');
                @endforeach

                $('#form-links').append('<select id="page_id"></select>');

                @foreach ($pages as $page)
                $('#page_id').append('<option value="{{ $page->id }}">{!! $page->title !!}</option>');
                @endforeach


                    break;

                case 'menu1':
                    $('#form-links').empty();
                    break;
            
               
            }

            axios.get('../admin/positions/'+item.value)
            .then((response) => {
                $('#position').empty();
            
              $('#position').append('<option>إختر الترتيب ....</option>');

              for (let i = 0; i <= response.data; i++) {
                  let j = ++i;

                  
                  $('#position').append('<option>'+j+'</option>');
                  
              }
            }).catch((error) => {
                
            })

        }


        function createLink(){

            let link = {
                place: $('#place').val(),
                name: $('#name').val(),
                position: $('#position').val(),
                visible: $('#visible').val(),
                page_id: $('#page_id').val(),
                parent_id: $('#parent_id').val(),
            }

            axios.post('../admin/links', link)
            .then((response) => {
                 /*$('#success-message').append('<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم الإرسال!</strong> تم إضافة عميل جديد بنجاح!</div></div>');
                    setTimeout(() => {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove() 
                        });
                }, 2000);*/
                //console.log(response);
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

    </script>
    
@endsection