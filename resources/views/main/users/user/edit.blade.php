@extends('main.layouts.app')

@section('title') تعديل بياناتى @endsection

@section('content')
<!-- add_auctions -->
<section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>تعديل بيانات المستخدم {{ $user->name }}</h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <h4>البيانات الشخصية</h4>
                <form method="POST" action="{{ route('update-profile' , $user->name) }}">
                    @csrf
                    @method('put')
                    <div class="block_form_1 row">
                        <div class="row">
                            <div class="col-md-12">
                                <h4> بيانات المعلن </h4>
                            </div>
                        </div>
                                <div class="block_form_1">
                            <div class="col-md-2">
                                <label for="">اســم المعلن <em>*</em></label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                            

                    
                            <div class="col-md-2">
                                <label for="">البريد الإلكتروني</label>
                            </div>
                            <div class="col-md-4">
                                <input type="email" class="form-control required" name="email" value="{{ $user->email }}">
                            </div>


                            <div class="col-md-2">
                                <label for="">كلمة المرور</label>
                            </div>
                            <div class="col-md-10">
                                <input type="password" class="form-control required" name="password">
                            </div>
                            

                            
                        
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-default btn_web">حفظ</button>
                                                    <button type="submit" class="btn btn-default btn_web">إلغاء</button>
                                                </div>
                                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection