@extends('admin.layouts.app')

@section('head')
    <style>
        a { text-decoration: none; color: #f2f2f2; }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

           <div class="col-md-3">
               <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">settings</span></h1>
                    <a href="{{ route('settings.edit', 'main') }}"><h5 class="text-center">الإعدادت الأساسية</h5></a>
               </div>
           </div>

           <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">web_asset</span></h1>
                    <a href="{{ route('settings.edit', 'about') }}"><h5 class="text-center">صفحة عن الموقع</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">view_list</span></h1>
                    <a href="{{ route('settings.edit', 'terms') }}"><h5 class="text-center">صفحة الشروط</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">toc</span></h1>
                    <a href="{{ route('settings.edit', 'services') }}"><h5 class="text-center">صفحة خدماتنا</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">view_stream</span></h1>
                    <a href="{{ route('settings.edit', 'branches') }}"><h5 class="text-center">صفحة فروعنا</h5></a>
                </div>
            </div>



            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">assignment_ind</span></h1>
                    <a href="{{ route('clients.index') }}"><h5 class="text-center">صفحة عملائنا</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">work</span></h1>
                    <a href="{{ route('portfolios.index') }}"><h5 class="text-center">صفحة أعمالنا</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">group_work</span></h1>
                    <a href="{{ route('teams.index') }}"><h5 class="text-center">صفحة فريق العمل</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">monetization_on</span></h1>
                    <a href="{{ route('settings.edit', 'financial_fees') }}"><h5 class="text-center">صفحة الرسوم المالية</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">payment</span></h1>
                    <a href="{{ route('settings.edit', 'payment_methods') }}"><h5 class="text-center">صفحة طرق الدفع</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">view_headline</span></h1>
                    <a href="{{ route('icons', 'header1') }}"><h5 class="text-center">أيقونات القائمة الرئيسية</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">subject</span></h1>
                    <a href="{{ route('icons', 'header2') }}"><h5 class="text-center">أيقونات القائمة الرئيسية 2</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">queue</span></h1>
                    <a href="{{ route('icons', 'header3') }}"><h5 class="text-center">أيقونات القائمة الرئيسية 3</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">horizontal_split</span></h1>
                    <a href="{{ route('icons', 'footer') }}"><h5 class="text-center">أيقونات ذيل الصفحة</h5></a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">local_atm</span></h1>
                    <a href="{{ route('icons', 'footer-payment') }}"><h5 class="text-center">أيقونات طرق الدفع</h5></a>
                </div>
            </div>


            @foreach ($pages as $page)

            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0;">pages</span></h1>
                    <a href="{{ route('pages.show', $page->id) }}"><h5 class="text-center">{{ $page->title }}</h5></a>
                </div>
            </div>
                
            @endforeach


            <div class="col-md-3">
                <div class="card">
                    <h1 class="text-center"><span class="material-icons" style="font-size:50px; padding:20px 0 20px 45px;">links</span></h1>
                    <a href="{{ route('links.index') }}"><h5 class="text-center">  روابط الصفحات </h5></a>
                </div>
            </div>

            

          
    </div>
</div>
@endsection