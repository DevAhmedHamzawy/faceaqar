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

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'services') }}"><h1 class="text-center">صفحة خدماتنا</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'branches') }}"><h1 class="text-center">صفحة فروعنا</h1></a>
                </div>
            </div>



            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('clients.index') }}"><h1 class="text-center">صفحة عملائنا</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('portfolios.index') }}"><h1 class="text-center">صفحة أعمالنا</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('teams.index') }}"><h1 class="text-center">صفحة فريق العمل</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'financial_fees') }}"><h1 class="text-center">صفحة الرسوم المالية</h1></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('settings.edit', 'payment_methods') }}"><h1 class="text-center">صفحة طرق الدفع</h1></a>
                </div>
            </div>


            @foreach ($pages as $page)

            <div class="col-md-3">
                <div class="card">
                    <a href="{{ route('pages.show', $page->id) }}"><h1 class="text-center">{{ $page->title }}</h1></a>
                </div>
            </div>
                
            @endforeach

            

          
    </div>
</div>
@endsection