@extends('main.layouts.app')

@section('title') {{ $settings->name }} @endsection

@section('content')


    @include('main.welcome.search')  
    
    @include('main.welcome.most_viewed')    

    @include('main.welcome.services')
    

    @include('main.welcome.new')    


    <!-- banner 1 -->
    <div class="banner1">
        <div class="container">
           <a href="#"> <img src="{{ url('main/images/banner1.png') }}"> </a> 
        </div>
    </div>

    @include('main.welcome.estate_offices')    

    @include('main.welcome.estate_services')    
    
    @include('main.welcome.government_services')

    @include('main.welcome.project_estates')    
    
    @include('main.welcome.adding_estates')

    @include('main.welcome.auction_estates')    
    
    @include('main.welcome.searching_estates')

    @include('main.welcome.request_estates')    
    
    @include('main.welcome.customers_portfolios_work')
    
    @include('main.welcome.contact') 
   
@endsection


@section('footer')
    <script type="text/javascript" src="{{ asset("main/js/pages/welcome.js") }}"></script>
@endsection