@extends('main.layouts.app')

@section('title')  الإشعارات  @endsection

@section('header')
    <style>
        .message{
            margin-bottom:20px; padding-right:30px; border-radius:3px;
        }
        .read {
            background-color:#f2f2f2;
        }
    </style>
@endsection

@section('content')
     <!-- terms_page -->
	<section id="terms_page">
		<div class="container">
			<div class="row">
				<!-- title_pages -->
				<div class="title_pages">
				<h2>الإشعارات</h2>
					<span></span>
				</div>
				<!-- end_title_pages -->

				<!-- content_terms_page -->
				<div class="content_terms_page">
                    <div class="row">
                        <div class="col-md-12" style="margin:30px;">
                            @foreach ($notifications as $notification)
                            <div class="message @unless($notification->read_at == null) read @endunless" id="{{ $notification->id[0] }}">
                                @php $data = json_decode($notification->data); $notification->id = str_split($notification->id,8)  @endphp
                                @unless ($data->from == auth()->user()->id)
                                {{--<input type="checkbox" onclick="read({{ $notification->id[0][5] }})">--}}
                                <h1>رسالة جديدة</h1>
                                <h3>{{ $data->message }}</h3>
                                <p>{{ $notification->created_at }}</p>    
                                @endunless
                            </div>
                           
                            @endforeach
                        </div>
                    </div>
				</div>
				<!-- end_content_terms_page -->
			</div>
		</div>
	</section>
	<!-- end_terms_page -->
@endsection


@section('footer')
    <script>
        function read(id)
        {
            axios.post('../notifications/read', id)
            .then((data) => {
                $('#'+id).addClass('read');
            })
        }
    </script>
@endsection