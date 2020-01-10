@extends('main.layouts.app')

@section('content')
    
<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            @include('main.estates.includes.create.location')

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
