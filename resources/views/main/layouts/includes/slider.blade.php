  <!-- Slider -->
  <div class="owl-carousel slider">
    @foreach ($sliders as $slider)
    <div class="item"> <a href="{{ route('brokers.show' , $slider->id) }}"> <img src="{{ $slider->main_img_path }}" height="500"> </a> </div>
    @endforeach
  </div>

  <!-- ad bar -->
  <div class="bartext">
      <ul class="inbartext nt-example1">
          <h2>الشريط الاعلاني</h2>
          @foreach ($tickers as $ticker)
            <li><a href="{{ route('brokers.show' , $ticker->id) }}" title="..."><p>إعلان وسيط إلكترونى{{ $ticker->id }}</p></a></li>              
          @endforeach
      </ul>
  </div>