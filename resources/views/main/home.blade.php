@extends('main.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    {{ auth()->user()->name }}

                    <a href="{{ route('estate.createestate', 'local_estate') }}">إضافة عقار محلى</a>
                    <a href="{{ route('estate.createestate', 'global_estate') }}">إضافة عقار دولى</a>
                    <a href="{{ route('estate.createestate', 'schema_estate') }}">إضافة مخطط عقارى </a>
                    <a href="{{ route('estate.createestate', 'project_estate') }}">إضافة مشروع عقارى </a>
                    <a href="{{ route('estate.createestate', 'request_estate') }}">إضافة طلب عقارى </a>
                    <a href="{{ route('estate.createestate', 'auction_estate') }}">إضافة مزاد عقارى </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
