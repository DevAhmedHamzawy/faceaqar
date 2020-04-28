@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4>روابط الصفحات</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button onclick="generateForm();return false;" class="btn btn-primary col-md-12"><span class="material-icons">add</span></button>
                    <br><br>
                    <form style="display: none;" class="form-group form-links">
                        <select id="place" class="form-control" onchange="getpositions(this);">
                            <option selected disabled>اختر المكان ....</option>
                            <option value="menu1">العنوان الرئيسى للقائمة</option>
                            <option value="menu2">العنوان الفرعى للقائمة</option>
                            <option value="footer1">1ذيل الصفحة</option>
                            <option value="footer2">ذيل الصفحة2</option>
                        </select>
                        <br/>
                        <input type="text" class="form-control" id="name">
                        <br/>
                        <select id="position"  class="form-control">
                            <option selected disabled>إختر الترتيب ....</option>
                        </select>
                        <br/>
                        <select id="visible"  class="form-control">
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>
                        <br/>
                        <div id="form-links"></div>
                        
                        <button onclick="createLink();return false;" class="btn btn-primary col-md-12">إنـــشـــاء الــــرابــــط</button>
                    </form>

                    <table class="table table-striped table-dark">

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">الإسم</th>
                                    <th scope="col">المكان</th>
                                    <th scope="col">العمليات</th>
                                </tr>
                            </thead>
                            @forelse ($links as $link)
                            <tbody>
                                <tr>
                                    <td scope="row">{{ $link->id }}</td>
                                    <td>{{ $link->name  }}</td>
                                    <td>

                                        @switch($link->place)
                                            @case('menu1')
                                                العنوان الرئيسى للقائمة
                                                @break
                                            @case('menu2')
                                                العنوان الفرعى للقائمة
                                                @break
                                            @case('footer1')
                                                ذيل الصفحة 1
                                                @break
                                            @case('footer2')
                                                ذيل الصفحة 2
                                            @break
                                            @default
                                                {{ $link->name  }}
                                                
                                        @endswitch

                                    
                                    
                                    
                                    
                                    </td>
                                    <td>
                                        <form action="{{ route('links.destroy', $link->name) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">حذف</button>
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
                
                <br>
               

            </div>
        </div>
        <div class="text-center" style="margin-top:-45px;">{{ $links->links() }}</div>
    </div>

</div>
@endsection


@section('footer')

    <script>

        
        
        

        function getpositions(item){

            switch (item.value) {
                case 'footer1' || 'footer2':

                    $('#form-links').empty();

                    $('#form-links').append('<select id="page_id" class="form-control"></select>');

                    @foreach ($pages as $page)
                    $('#page_id').append('<option value="{{ $page->id }}">{!! $page->title !!}</option>');
                    @endforeach

                    break;
                
                case 'menu2':

                $('#form-links').empty();

                $('#form-links').append('<select id="parent_id" class="form-control"></select>');

                @foreach ($menuone as $link)
                $('#parent_id').append('<option value="{{ $link->id }}">{!! $link->name !!}</option>');
                @endforeach

                $('#form-links').append('<select id="page_id" class="form-control"></select>');

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

        function generateForm()
        {
            $('.form-links').css('display', 'block');
        }

    </script>
    
@endsection