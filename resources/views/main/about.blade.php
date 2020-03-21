@extends('main.layouts.app')

@section('title') من نحن  @endsection

@section('content')

    <!-- about_us -->
	
	
	<!-- title_section -->
				
	<section id="about_us">
	    <div class="container">
	        <div class="title_pages">
					<h2> من نحن </h2>
			</div>
	        <div class="row">
	            <div class="col-md-8 col-sm-12">
	                <div class="right-about">
	                    <h3>{{ $settings->name }}</h3>
                        <p>{{ $settings->about }}</p>
	                </div>
	            </div>
	            <div class="col-md-4 col-sm-12">
	                <div class="pic_about">
	                    <img src="images/bg_slider.jpg" class="img-responsive"/>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	</section>
	<!-- end_about_us -->
    
@endsection