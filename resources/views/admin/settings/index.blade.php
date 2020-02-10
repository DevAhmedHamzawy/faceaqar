@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

           <div class="col-md-3">
               <div class="card">
                    <a href="{{ route('settings.edit', 'main') }}"><h1 class="text-center">الإعدادت الأساسية</h1></a>
               </div>
           </div>

           <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'about') }}"><h1 class="text-center">صفحة عن الموقع</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'terms') }}"><h1 class="text-center">صفحة الشروط</h1></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <a href="{{ route('clients.index') }}"><h1 class="text-center">صفحة عملائنا</h1></a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <a href="{{ route('portfolios.index') }}"><h1 class="text-center">صفحة أعمالنا</h1></a>
                </div>
            </div>

          
    </div>
</div>
@endsection