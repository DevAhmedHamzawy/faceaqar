@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header text-center">
                   التذكرة الخاصة بتثبيت عقار {{ $estate->name }}
                </h5>

                <div class="card-body">
                       <p class="col-md-6">إسم العقار : {{ $payment_data['item_name'] }}</p>
                       <p class="col-md-6">إسم البنك : {{ $payment_data['bank_name'] }}</p>
                       <p class="col-md-6">إسم صاحب الحساب : {{ $payment_data['account_owner'] }}</p>
                       <p class="col-md-6">رقم الحساب : {{ $payment_data['account_no'] }}</p>
                       <p class="col-md-6">المبلغ : {{ $payment_data['price'] }}</p>
                       <p class="col-md-6">التاريخ : {{ $payment_data['date'] }}</p>
                       <p class="col-md-6">الإيصال : {{ $payment_data['invoice'] }}</p>

                       @if (!$ticket->payment_approval)

                       <form action="{{ route('tickets.activate', [$ticket->id, $estate->name]) }}" method="post">
                        @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">
                                        تــــــفــــعــــيــــل عــــمـــلـــيــة الــــدفـــــع  
                                    </button>
                                </div>
                            </div>
                       </form>
                           
                       @else

                       <form action="{{ route('tickets.deactivate', [$ticket->id, $estate->name]) }}" method="post">
                        @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">
                                           إلـــــغــــاء  الــــتــــــفــــعــــيــــل 
                                    </button>
                                </div>
                            </div>
                       </form>

                       @endif
                      
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection