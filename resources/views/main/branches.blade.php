@extends('main.layouts.app')

@section('title') فروعنا  @endsection

@section('content')
     <!-- terms_page -->
	<section id="terms_page">
		<div class="container">
			<div class="row">
				<!-- title_pages -->
				<div class="title_pages">
				<h2>فروعنا</h2>
					<span></span>
				</div>
				<!-- end_title_pages -->

				<!-- content_terms_page -->
				<div class="content_terms_page">
					{!! $settings->branches !!}
				</div>
				<!-- end_content_terms_page -->
			</div>
		</div>
	</section>
	<!-- end_terms_page -->
@endsection