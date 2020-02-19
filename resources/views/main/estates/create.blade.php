@extends('main.layouts.app')



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
       

       function addImages(){
            //console.log($('.images').find('.form-group').length);
             
            if($('.images').find('.form-group').length < 4){
                $('.images').append('<div class="form-group"><input type="file" name="estateimages[]" class="form-control" id="" placeholder=""></div>');
            }else{
                $('.images-danger').css('display', 'block');
                $('.images-danger').append('<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>تم تجاوز الحد الأقصى من الصور !</div></div>');
                setTimeout(() => {
                    $(".alert").fadeTo(500, 0).slideUp(500, function(){
                        $(this).remove() 
                    });
                }, 2000);
            }
        }

    function initMap(lat = null, lng = null) {
    
     if(lat == null){ var myLatLng = {lat: 24.774265, lng: 46.738586} } else{ var myLatLng = {lat, lng} } ;
  
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
        document.getElementById('latlng').value = [latLng.lat(),latLng.lng()];
     });
     }


     function setMap(item)
     {
        let lat = $('option:selected', item).data("lat");
        let lng = $('option:selected', item).data("lng");
        initMap(Math.floor(lat), Math.floor(lng));
     }
     

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk" async defer></script>
@endsection