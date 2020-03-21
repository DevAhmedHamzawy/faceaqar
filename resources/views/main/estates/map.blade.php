@extends('main.layouts.app')

@section('title') خريطة {{ $adSort->adjective }} @endsection

@section('header')
<script src="http://maps.google.com/maps/api/js?libraries=places&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk&language=AR"></script>
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
        var adSortName = <?php print_r(json_encode($adSort->name)) ?>;

        //console.log(locations);

var mymap = new GMaps({
  el: '#mymap',
  lat: 24.774265,
  lng: 46.738586,
  zoom:3.8
});



$.each( locations, function( index, value ){
    let marker = mymap.addMarker({
      lat: value.lat,
      lng: value.lng,
      title: value.name,
      infoWindow: {
        content: "<a target='_blank' href='{!! url('/estates/"+adSortName+"/"+value.name+"') !!}'><div class='box'><img src='http://akar-dz.com/public/admin/uploads/img/152388124612453.jpg' width='50' height='50'><div class='text'><h1>"+value.name+"</h1><h2>"+value.code+"</h2>@if($adSort->name != 'office_estate')<ul class='list-inline block-info'><h3><li style='float: right;padding-left: 15px;margin-top: 5px;'><span class='fa fa-home'></span>"+value.category.name+"<span class='fas fa-building'></span>"+value.sortName[0]+"</li><li style='float: right;padding-left: 15px;margin-top: 5px;'><span class='far fa-gem'></span>"+value.offerName[0]+"</li></ul>@endif</div></div></a>"
      }
    });
    
});


    </script>
@endsection