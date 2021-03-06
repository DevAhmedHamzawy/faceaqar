@extends('main.layouts.app')

@section('title') تعديل البيانات ل{{ $estate->name }}  @endsection


@section('header')
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap-datetimepicker.min.css') }}">
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>يرجى تعبئة الحقول الاتية :-</strong></p>
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
            @include('main.estates.includes.edit.location')
            <input type="hidden" name="adSort" value="{{ $adSort->name }}">

            @if($adSort->name == 'local_estate' || $adSort->name == 'auction_estate')
                @include('main.estates.includes.edit.commontwo')                
            @endif

            @if($adSort->name == 'project_estate' || $adSort->name == 'global_estate')
                @include('main.estates.includes.edit.commonone')                
            @endif
            
            @if($adSort->name == 'request_estate')
                @include('main.estates.includes.edit.request_estate')
            @endif

            @if($adSort->name == 'schema_estate')
                @include('main.estates.includes.edit.schema_estate')
            @endif

            @include('main.estates.includes.edit.restcommondetails')

        </div>
    </div>
</section>
@endsection

@section('footer')
    <script type="text/javascript">
       
       let imagesCount = Math.abs({!! count($estate->images) !!} - 6);
       let estate = {!! $estate !!};
       function addImages(){
            //console.log($('.images').find('.form-group').length);
            console.log(imagesCount);
            //imagesCount--;
            let imageFilesLength = ($('.images').find('.form-group').length) + 1;
            console.log(imageFilesLength);
            if(imageFilesLength < imagesCount){
                $('.images').append('<div class="form-group"><input type="file" name="estateimages[]" class="form-control" id="" placeholder="" accept="image/*"></div>');
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
    if(lat == null){ var myLatLng = {lat: {!! $estate->lat !!}, lng: {!! $estate->lng !!}} } else{ var myLatLng = {lat, lng} } ;
  
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


    let imgs = [];
    function add(b){

       if(!(imgs.includes(b))) { imgs.push(b); }
       
       $("input[name=imgs]").val(JSON.stringify(imgs)); //store array
       
       $('#'+b).css('display' , 'none');
       $('#'+b).css('transition' , '0.2s all ease-in-out');

       /*let estate = {
        estate: {!! $estate !!},
        index: b,
       
       }*/
      
       axios.delete(`../../../estate-images/${estate.name}/${b}`)
        .then((data) => {
           imagesCount++
        })

    }


    function getCities(item){
    axios.get('../../../areas/'+item.value)
        .then((data) => {
           $('#cities').empty()
           for(city of data.data){
           $('#cities').append('<option value="'+city.name+'" data-lat="'+city.latitude+'" data-lng="'+city.longitude+'">'+city.name+'</option>')
           }  
        })
    }


function getSubCities(item){
    initMap(item.lat,item.lng)
    axios.get('../../../areas/'+item.value)
        .then((data) => {
           $('#area_id').empty()
           for(subcity of data.data){
           $('#area_id').append('<option value="'+subcity.id+'" data-lat="'+subcity.latitude+'" data-lng="'+subcity.longitude+'">'+subcity.name+'</option>')
           }  
        })
}
  
function setMap(item)
{
let lat = $('option:selected', item).data("lat");
let lng = $('option:selected', item).data("lng");
initMap(Math.floor(lat), Math.floor(lng));
}  

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&key=AIzaSyDqET1nIDZzMGEieGANkEF_xB1RSCkJTjk" async defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="{{ asset('main/js/bootstrap-hijri-datetimepicker.min.js') }}"></script>
    <script>
        $(function () {

            $(".hijri-date-input").hijriDatePicker();

        });
    </script>
@endsection