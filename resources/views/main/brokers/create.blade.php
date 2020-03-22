@extends('main.layouts.app')

@section('title') إضافة وسيط جديد   @endsection

@section('content')

<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>بيانات التسجيل في وسيط واجهة العقار الالكتروني</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <form id="commentForm" method="post" enctype="multipart/form-data" action="{{ route('brokers.store') }}" >
                    @csrf
                    <div id="rootwizard">
                        
                            <div class="tab-pane" id="rootwizard">
                                <h4> بيانات التواصل </h4>
                                <div class="block_form_1 row">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">اختر اسم الدولة <em>*</em></label>
                                            <select class="form-control selectOption" required>
                                                <option value="choose">أختر</option>
                                                <option value="choose">السعودية</option>
                                                <option value="choose">مصر</option>
                                            </select>
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <label for=""> اختر اسم المنطقة   <em>*</em></label>
                                            <select class="form-control selectOption" required>
                                                <option value="choose">أختر</option>
                                                <option value="choose">الرياض</option>
                                                <option value="choose">المدينة</option>
                                            </select>											
                                        </div>
                        
                                        <div class="col-md-4">
                                            <label for=""> اختر اسم المدينة  <em>*</em></label>
                                            <select class="form-control selectOption" required>
                                                <option value="choose">أختر</option>
                                                <option value="choose">الرياض</option>
                                                <option value="choose">المدينة</option>
                                            </select>												
                                        </div>
                                    </div>
                                <hr>
                                    <div class="row">
                                
                                        <div class="col-md-4">
                                            <label for=""> الاسم  <em>*</em></label>
                                            <input type="text" class="form-control required" name="name" placeholder="اكتب الاسم">
                                        </div>
                                    
                                        <div class="col-md-4">
                                            <label for=""> الجوال  <em>*</em></label>

                                            <input type="text" class="form-control required" name="mobile" placeholder="ادخل رقم الجوال">
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label for="">البريد الإلكترونى</label>

                                            <input type="email" class="form-control required" name="email" placeholder="انسخ عنوان البريد الالكتروني">
                                        </div>
                                    </div>
                                </div>
                                
                    </div>
                    
                    <h4> بيانات الإعلان </h4>
                        <div class="form-group broker_form_new_style">
                            <label for="">اختر نوع الإعلان في صفحة وسيط واجهة العقار الالكتروني <em>*</em> </label>
                            <Select id="optselector" name="broker_ad_sort">
                            <option selected disabled>أختر</option>
                            <option value="photosel">صور</option>
                            <option value="textopt">كتابة نصية</option>
                            <option value="socialopt">حسابات التواصل الاجتماعي</option>
                            <option value="advcartopt">الكروت الاعلانية الالكترونية</option>
                                <option value="mediaopt"> حجز صفحة اعلانية كاملة  </option>
                            </Select>
                        </div>

                        @include('main.brokers.includes.images')
                        @include('main.brokers.includes.text')
                        @include('main.brokers.includes.social_accounts')
                        @include('main.brokers.includes.e_ad_cards')
                        @include('main.brokers.includes.e_ad_page')
                        

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection


@section('footer')
    <script>
        $(function() {
                $('#optselector').change(function(){
                    $('.optitem').hide();
                    $('#' + $(this).val()).show();
                });
            });
    </script>
@endsection