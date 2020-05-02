<!-- customers -->
<div class="sec-customers">
    <div class="container">
        <h1>عملائنا</h1>
        <div class="owl-carousel customers">
        @foreach ($clients as $client)
            <div class="item"> 
                <a href="#"> <img src="{{ $client->img_path }}"> <h4>{{ $client->name }} <img src="{{ url('main/images/slidpos.png') }}"> </h4> </a> 
            </div>
        @endforeach  
        </div>
    </div>
</div>

<!-- our works -->
<div class="sec-customers ourwork">
    <div class="container">
        <h1>أعمالنا</h1>
        <div class="owl-carousel customers">
          @foreach ($portfolios as $portfolio)
            <div class="item"> 
                <a href="#"> 
                    <img src="{{ $portfolio->img_path }}"> 
                    <div class="ourwork-desk">
                        <h4>{{ $portfolio->name }}</h4>
                        <p>{{ $portfolio->date }}</p>
                        <img src="{{ url('main/images/slidpos.png') }}">
                    </div>
                </a> 
            </div>
          @endforeach  
        </div>
    </div>
</div>

<!-- team -->
<div class="team">
    <div class="container">
        <h1 class="tit-las">فريق العمل</h1>
        <div class="items-team">
            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <img src="{{ url('main/images/team1.png') }}">
                        <h4>{{ $team->name }}</h4>
                        <p>{{ $team->role ?? 'ادارة الموقع' }}</p>
                    </div> 
                @endforeach
            </div>
        </div>
    </div>
</div>