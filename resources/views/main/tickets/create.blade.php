@extends('main.layouts.app')



@section('content')


 <!-- add_auctions -->
 <section id="add_international">
    <div class="container">
        <div class="row">
            <!-- title_pages -->
            <div class="title_pages">
                <h2>  انشاء تذكرة الرسوم المالية رقم <span> (٢) </span> </h2>
                <span></span>
            </div>
            <!-- end_title_pages -->

            <div class="add_auctions">
                <form id="commentForm" action="{{ route('payments.store') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h4> طريقة الدفع </h4>
                            </div>
                            <div class="col-md-12">
                                <select name="payment_method" id="payment_method">
                                    <option value="0">باى بال</option>
                                    <option value="1">تحويل بنكى</option>
                                </select>
                            </div>
                        </div>

                        <div id="rootwizard">
                            <div class="tab-pane" id="tab1">
                                    <div class="bankconvert" style="display:none;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4> بيانات التحويل البنكي </h4>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for=""> اسم البنك المحول منه <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="bank_name" class="form-control required" id="" placeholder="اسم البنك">
                                        </div>
                                
                                        <div class="col-md-2">
                                            <label for=""> اسم صاحب الحساب   <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="account_owner" class="form-control required" id="" placeholder="اسم صاحب الحساب">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for=""> رقم الحساب البنكي   <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="account_no" class="form-control required" id="" placeholder="رقم الحساب">
                                        </div>
                               
                                        <div class="col-md-2">
                                            <label for="">قيمة المبلغ المحول <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="price" class="form-control required" id="" placeholder="اكتب قيمة المبلغ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label for=""> تاريخ التحويل البنكي <em>*</em></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" name="date" class="form-control datepicker required" id="" placeholder=" تقويم ميلادي">
                                        </div>
                                  
                                        <div class="col-md-2">
                                            <label for="">ارفاق صورة الايصال  </label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="invoice" class="form-control required" id="" placeholder="">
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                                                                <div class="lastchek checkbox2">
                                <div class="checkbox ">
                                    <input type="checkbox" class="chekreg">
                                    <label>أوافق علي كافة الاحكام والشروط للموقع الإلكتروني والالتزام بما جاء فيها</label>
                                     
                                </div>
                                </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <div class="btns_98">
                                                <button type="submit" class="btn btn-default btn_web">إنشــاء تذكرة</button>
                                                <button type="submit" class="btn btn-default btn_web">حفظ </button>
                                                <button type="submit" class="btn btn-default btn_web">إلغاء </button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div id="rootwizard" class="onlinepayment">
                            <input type="hidden" name="name" value="name">
                            <input type="hidden" name="price" value="500">
                            <input type="hidden" name="description" value="40">
                            <input type="hidden" name="qty" value="1">
                        </div>
                        
                    </div>

                
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end_add_international -->


@endsection


@section('footer')
    
    <script>
        
        $('#payment_method').on('change', function(){
            if((this).value == 1){
                $('.bankconvert').css('display', 'block');
            }else{
                $('.bankconvert').css('display', 'none');
            }
        })

    </script>

@endsection