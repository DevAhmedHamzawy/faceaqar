  <!-- Slider -->
  <div class="owl-carousel slider">
    @foreach ($sliders as $slider)
    <div class="item"> <a href="{{ route('brokers.show' , $slider->name) }}"> <img src="{{ $slider->img_path }}" height="400"> </a> </div>
    @endforeach
  </div>

  
  <!-- ad bar -->
  <div class="bartext">
      <ul class="inbartext nt-example1">
          <h2>الشريط الاعلاني</h2>
          @foreach ($tickers as $ticker)
            <li><a href="{{ route('brokers.show' , $ticker->name) }}" title="..."><p>{{ $ticker->name }}</p></a></li>              
          @endforeach
      </ul>
  </div>