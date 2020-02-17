@extends('main.layouts.app')

@section('content')
 <!-- terms_page -->
 <section id="terms_page">
    <div class="container">
        <div class="row">
            @if (session('resent'))
            <div class="alert alert-success" role="alert">
                عميلنا العزيز ...... تم إرسال رسالة تأكيد أخرى
            </div>
            @endif
            <!-- title_pages -->
            <div class="title_pages">
            <h2>تأكيد البريد الإلكترونى</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <!-- content_terms_page -->
            <div class="content_terms_page text-center">
                <h2>عميلنا العزيز</h2>
                <h1>من فضلك قم بتأكيد البريد الإلكترونى</h1>
                <h2>يرجى تصفح صندوق البريد .... شكراً</h2>
                <h1>لم تصلك رسالة التأكيد, <a href="{{ route('verification.resend') }}">قم بإرسال رسالة تأكيد أخرى</a>.</h1>
            </div>
            <!-- end_content_terms_page -->
        </div>
    </div>
</section>
<!-- end_terms_page -->
@endsection
