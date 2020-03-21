@extends('main.layouts.app')

@section('title') عملائنا  @endsection

@section('content')

     <!-- customers -->
     <div class="sec-customers">
        <div class="container">
            <h1>عملائنا</h1>
            <div class="owl-carousel customers">
             
              @foreach($clients as $client)    
              <div class="item">
                  <a href="#"> <img src="{{ $client->img }}"> <h4>{{ $client->name }} <img src="{{ $client->img }}"></h4> </a> 
              </div>
              @endforeach
              
            </div>
        </div>
    </div>

@endsection