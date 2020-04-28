@extends('admin.layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                       <h5 class="text-center">
                            @switch($place)
                                @case('header1')
                                        أيقونات القائمة الرئيسية
                                    @break
                                @case('header2')
                                       2 أيقونات القائمة الرئيسية    
                                    @break
                                @case('header3')
                                       3 أيقونات القائمة الرئيسية      
                                    @break
                                @case('footer')
                                        أيقونات ذيل الصفحة
                                    @break
                                @case('footer-payment')
                                        أيقونات طرق الدفع
                                    @break
                                @default
                                    {{ $place }}
                            @endswitch
                       </h5>
                  </div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <div class="row justify-content-center">
                                @foreach ($icons as $icon)
                                    <div class="col-md-3" id="the_icon_{{ $icon->id }}">
                                        <img src="{{ $icon->icon_path }}" style="width:60px;height:60px;margin: 16px 97px;background-color: black;" class="rounded-circle" onclick="document.getElementById('image_{!! $icon->id !!}').click()" alt="Cinque Terre">
                                        <h5 class="text-center">{{ $icon->name }}</h5>
                                        <input onchange="changeIcon({{ $icon->id }})" style="display: none;"  id="image_{{ $icon->id }}" type="file" name="image">
                                        <input type="hidden" id="icon_id_{{ $icon->id }}" value="{{ $icon->id }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    


@section('footer')
    <script>


        window.form_data = new FormData();

       
        function changeIcon(id){
            let file_data = $(`#image_${id}`).prop('files')[0];
            form_data.append('file_data', file_data);
            form_data.append('icon_id', $(`#icon_id_${id}`).val());
            

            axios.post('../../admin/icons/{!! $place !!}', form_data)
            .then((data) => {
                location.reload();
                                      
            }).catch((error) => {

            
            
            });
        
        }
    </script>
   
@endsection