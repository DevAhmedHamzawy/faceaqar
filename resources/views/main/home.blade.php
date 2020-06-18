@extends('main.layouts.app')

@section('title') {{ auth()->user()->name }}    @endsection

@section('content')


@if(auth()->user()->roles->isEmpty())
<div class="container">
    <div class="row">

        <div class="col-md-2"></div>
        <div class="col-md-9">

            <form action="{{ route('assign-role') }}" class="form-group" method="post">
                @csrf
                <select name="role" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->display_name }}</option>
                    @endforeach
                </select>
            
                <button type="submit" class="btn btn-primary col-md-12">حفظ</button>
            
            </form>

        </div>

    </div>
</div>


@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <div class="servic-title">
                    <div class="container">
                        <h1>الصفحة الشخصية</h1>
                    </div>
                </div>


                
                <div class="container">
                    {{-- @php $image = json_decode(auth()->user()->images->img); @endphp --}}
                    
                    {{-- dd(url('main/users/{{ auth()->user->id }}/{{ $image }}'))  --}}
                    <img src="{{ url('main/images/team1.png') }}" class="center-block img-circle" onclick="document.getElementById('profile').click()" alt="Cinque Terre">
                    <input onchange="changeProfile()" style="display: none;"  id="profile" type="file" name="image">
                    <h1 class="text-center">{{ auth()->user()->name }}</h1>
                    <div class="row col-md-12">
                        <a href="{{ route('edit-profile', auth()->user()->name) }}" class="btn btn-primary col-md-4" style="margin: 10px 35% 0 0;"><h5>تعديل بياناتى</h5></a>
                        <a href="{{ route('inbox', auth()->user()->name) }}" class="btn btn-primary col-md-4" style="margin: 10px 35% 0 0;"><h5>صندوق الرسائل</h5></a>
                        <a href="{{ route('brokers.create') }}" class="btn btn-primary col-md-4" style="margin: 10px 35% 0 0;"><h5>إضافة الوسيط</h5></a>
                        <a href="{{ route('notifications') }}" class="btn btn-primary col-md-4" style="margin: 10px 35% 0 0;"><h5>الإشعارات</h5></a>
                        <a href="{{ route('all-lawyers') }}" class="btn btn-primary col-md-4" style="margin: 10px 35% 0 0;"><h5>محامين الموقع</h5></a>
                    </div>
                </div>
               

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                

               @include('main.home.includes.estates')


               @include('main.home.includes.favourite_estates')

               
               @include('main.home.includes.brokers')

               @include('main.home.includes.tickets')

               @include('main.home.includes.add_estate')


                
               @include('main.home.includes.search_estate')
                
        </div>
    </div>
</div>
@endif


@endsection



@section('footer')
    <script>


        window.form_data = new FormData();

       
        function changeProfile(id){
            let file_data = $(`#profile`).prop('files')[0];
            form_data.append('file_data', file_data);
            

            axios.post('../../profile/image', form_data)
            .then((data) => {
                
                location.reload();
                                      
            }).catch((error) => {

            
            
            });
        
        }
    </script>
   
@endsection