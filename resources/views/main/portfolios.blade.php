@extends('main.layouts.app')

@section('content')

     <!-- customers -->
     <div class="sec-customers">
        <div class="container">
            <h1>أعمالنا</h1>
            <div class="owl-carousel customers">
             
              @foreach($portfolios as $portfolio)    
                <div class="item">
                    <a href="#"> <img src="{{ $portfolio->img }}"> <h4>{{ $portfolio->name }} <img src="{{ $portfolio->img }}"></h4> <p>{{ $portfolio->date }}</p> </a> 
                </div>
              @endforeach
              
            </div>
        </div>
    </div>

@endsection