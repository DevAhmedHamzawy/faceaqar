@extends('main.layouts.app')

@section('header')
<script src="http://maps.google.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk&language=AR"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


<style type="text/css">
  #mymap {
        border:1px solid red;
        width: 100%;
        height: 1000px;
  }
</style>
@endsection


@section('content')
    <div id="mymap"></div>
@endsection



@section('footer')
    <script>
        var locations = <?php print_r(json_encode($estates)) ?>;


var mymap = new GMaps({
  el: '#mymap',
  lat: 24.774265,
  lng: 46.738586,
  zoom:3.8
});


$.each( locations, function( index, value ){
    mymap.addMarker({
      lat: value.lat,
      lng: value.lng,
      title: value.city,
      click: function(e) {
        alert('This is '+value.city+', gujarat from India.');
      }
    });
});
    </script>
@endsection