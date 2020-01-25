@extends('main.layouts.app')

@section('content')

     <!-- team -->
     <div class="team">
        <div class="container">
            <h1 class="tit-las">فريق العمل</h1>
            <div class="items-team">
                <div class="row">
                    
                    @foreach ($teams as $team)
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <img src="images/team1.png">
                            <h4>{{ $team->name }}</h4>
                            <p>مدير ادارة الموقع</p>
                        </div>
                    @endforeach
                   
                    
                </div>
            </div>
        </div>
    </div>

@endsection