@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           <div class="card">
           <a href="{{ route('settings.edit', 'main') }}">Main Settings</a>
           <a href="{{ route('settings.edit', 'about') }}">About Page</a>
           <a href="{{ route('settings.edit', 'terms') }}">Terms Page</a>

           </div>

        </div>
    </div>
</div>
@endsection