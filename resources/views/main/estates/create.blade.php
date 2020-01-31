@extends('main.layouts.app')

@section('header')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>   
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            @include('main.estates.includes.create.location')

            <input type="hidden" name="adSort" value="{{ $adSort->name }}">

            @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')
                @include('main.estates.includes.create.commontwo')                
            @endif

            @if($adSort->name == 'project_estate' || $adSort->name == 'global_estate')
                @include('main.estates.includes.create.commonone')                
            @endif
            
            @if($adSort->name == 'request_estate')
                @include('main.estates.includes.create.request_estate')
            @endif

            @if($adSort->name == 'schema_estate')
                @include('main.estates.includes.create.schema_estate')
            @endif

            @include('main.estates.includes.create.restcommondetails')

        </div>
    </div>
</section>
@endsection

@section('footer')
    <script type="text/javascript">
        Dropzone.autoDiscover = false;

        Dropzone.options.imageUpload = {
            maxFilesize:1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };



    function initMap() {
    var myLatLng = {lat: 24.774265, lng: 46.738586};
  
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 13
    });
  
    var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!',
          draggable: true
        });
  
     google.maps.event.addListener(marker, 'dragend', function(marker) {
        var latLng = marker.latLng;
        document.getElementById('latlng').value = [latLng.lat(),latLng.lat()];
     });
     }
  

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk" async defer></script>
@endsection