  <!-- Slider -->
  <div class="owl-carousel slider">
    @foreach ($sliders as $slider)
      <div class="item"> <a href="#"> <img src="{{ url('main/images/slider.png') }}"> </a> </div>
    @endforeach
  </div>

  
  <!-- ad bar -->
  <div class="bartext">
      <ul class="inbartext newsticker" style="height: 47px !important;overflow: hidden;">
          <h2>الشريط الاعلاني</h2>
          @foreach ($tickers as $ticker)
            <li><a href="#" title="..."><p>{{ $ticker->description }}</p></a></li>              
          @endforeach
      </ul>
  </div>