<div class="formob visible-xs">
    <div class="first-tabel">
        <h1>بيانات العقار</h1>
        <div class="itemm">
            <h3>نوع العقار</h3>
            <p>{{ $estate->category->name }}</p>
        </div>
        <div class="itemm">
            <h3>نوع القطعة</h3>
            <p>{{ $sortName }}</p>
        </div>
        <div class="itemm">
            <h3>نوع العرض</h3>
            <p>{{ $offerName }}</p>
        </div>
        <div class="itemm">
            <h3>اسم المخطط </h3>
            <p>{{ $localAuctionEstate->schema_name }}</p>
        </div>
        <div class="itemm">
            <h3>رقم المخطط </h3>
            <p>{{ $localAuctionEstate->schema_number }}</p>
        </div>
        <div class="itemm">
            <h3> رقم البلوك </h3>
            <p>{{ $localAuctionEstate->block_number }}</p>
        </div>
        <div class="itemm">
            <h3>رقم القطعة </h3>
            <p>{{ $localAuctionEstate->piece_number }}</p>
        </div>
        <div class="itemm">
            <h3>عدد الشوارع </h3>
            <p>{{ $localAuctionEstate->streets_number }}</p>
        </div>
        <div class="itemm">
            <h3> مساحة العقار م2 </h3>
            <p>{{ $localAuctionEstate->estate_space }} متر</p>
        </div>
        <div class="itemm">
            <h3> السعر </h3>
            <p>{{ $localAuctionEstate->price }}</p>
        </div>
        <div class="itemm">
            <h3> نوع السعر </h3>
            <p>{{ $priceSortName }}</p>
        </div>
        
        <div class="itemm">
            <h3> طريقة الدفع </h3>
            <p>{{ $paymentSortName }}</p>
        </div>
        <div class="itemm">
            <h3> المستندات </h3>
            <p>{{ $localAuctionEstate->docs }}</p>
        </div>
        <div class="itemm">
            <h3>  التسليم  </h3>
            <p>{{ $localAuctionEstate->delivery_method }}</p>
        </div>
        <div class="itemm">
            <h3> العقار  علي يوتيوب </h3>
            <p class="youicon"> <i class="fab fa-youtube"></i></p>
        </div>
        
        <h1>بيانات العقار للمباني</h1>
        
        <div class="itemm">
            <h3> مساحة البناء م2 </h3>
            <p>{{ $localAuctionEstate->building_space }} متر</p>
        </div>
        <div class="itemm">
            <h3> تصميم البناء  </h3>
            <p>{{ $localAuctionEstate->building_design }}</p>
        </div>
        
        <div class="itemm">
            <h3> عمر العقار </h3>
            <p>{{ $localAuctionEstate->age }}</p>
        </div>
        <div class="itemm">
            <h3> عدد الادوار </h3>
            <p>{{ $localAuctionEstate->floors_number }}</p>
        </div>
        <div class="itemm">
            <h3>  عدد الوحدات  </h3>
            <p>{{ $localAuctionEstate->unit_number }}</p>
        </div>
        <div class="itemm">
            <h3> رقم الدور  </h3>
            <p>{{ $localAuctionEstate->floor_number }}</p>
        </div>
        <div class="itemm">
            <h3> رقم الوحدة  </h3>
            <p>{{ $localAuctionEstate->unit_number }}</p>
        </div>
        <div class="itemm">
            <h3> عدد الغرف  </h3>
            <p>{{ $localAuctionEstate->rooms_number }}</p>
        </div>
        <div class="itemm">
            <h3> عدد الصالات  </h3>
            <p>{{ $localAuctionEstate->receptions_number }}</p>
        </div>
        <div class="itemm">
            <h3>  عدد المطابخ   </h3>
            <p>{{ $localAuctionEstate->kitchens_number }}</p>
        </div>
        <div class="itemm">
            <h3> عدد المخازن   </h3>
            <p>{{ $localAuctionEstate->stores_number }}</p>
        </div>
        <div class="itemm">
            <h3>  عدد الحمامات  </h3>
            <p>{{ $localAuctionEstate->bathrooms_number }}</p>
        </div>
        <div class="itemm">
            <h3> المصاعد </h3>
            <p>{{ $localAuctionEstate->lifts_number }}</p>
        </div>
        <div class="itemm">
            <h3> نوع الخزانات  </h3>
            <p>{{ $localAuctionEstate->floor_tanks_sort }}</p>
        </div>
        
        <div class="itemm">
            <h3>  نوع الخزانات  </h3>
            <p>{{ $localAuctionEstate->overhead_tanks_sort }}</p>
        </div>
        <div class="itemm">
            <h3>  البدروم  </h3>
            <p>{{ $localAuctionEstate->basement }}</p>
        </div>
        <div class="itemm">
            <h3>  موقع السيارات  </h3>
            <p>{{ $localAuctionEstate->parking }}</p>
        </div>
        <div class="itemm">
            <h3> شبكة الكهرباء </h3>
            <p>{{ $localAuctionEstate->electricity_network }}</p>
        </div>
        <div class="itemm">
            <h3>  شبكة المياة   </h3>
            <p>{{ $localAuctionEstate->water_network }}</p>
        </div>
        <div class="itemm">
            <h3>   شبكة الغاز  </h3>
            <p>{{ $localAuctionEstate->gas_network }}</p>
        </div>
        <div class="itemm">
            <h3> شبكة الصرف  </h3>
            <p>{{ $localAuctionEstate->sewerage_network }}</p>
        </div>
    </div>
</div>

<div class="tabel_details_rael hidden-xs">

    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <h1>بيانات العقار</h1>
            <table class="table sectab table-bordered table-striped">
                <tbody class="table_oio right-table">
                    <tr>
                        <th>نوع العقار</th>
                        <th>نوع القطعة</th>
                        <th>نوع العرض</th>
                        <th>اسم المخطط </th>
                    </tr>
                    <tr>
                        <td> {{ $estate->category->name }} </td>
                        <td> {{ $sortName }} </td>
                        <td> {{ $offerName }} </td>
                        <td> {{ $localAuctionEstate->schema_name }} </td>
                    </tr>
                    
                    <tr>
                        <th>رقم المخطط </th>
                        <th>رقم البلوك </th>
                        <th>رقم القطعة </th>
                        <th>عدد الشوارع  </th>
                    </tr>
                    <tr>
                        <td> {{ $localAuctionEstate->schema_number }} </td>
                        <td> {{ $localAuctionEstate->block_number }} </td>
                        <td> {{ $localAuctionEstate->piece_number }} </td>
                        <td> {{ $localAuctionEstate->streets_number }} </td>
                    </tr>
                    
                    <tr>
                        <th> واجهة العقار </th>
                        <th> مساحة العقار م٢   </th>
                        <th> السعر </th>
                        <th> نوع السعر </th>
                    </tr>
                    <tr>
                        <td> {{ $destinationName }} </td>
                        <td> {{ $localAuctionEstate->estate_space }} متر مربع </td>
                        <td> {{ $localAuctionEstate->price }} </td>
                        <td> {{ $priceSortName }} </td>
                    </tr>

                    <tr>
                        <th>  طريقة الدفع </th>
                        <th> المستندات   </th>
                        <th> التسليم </th>
                        <th> شاهد العقار على اليوتيوب  </th>
                    </tr>
                    <tr>
                        <td> {{ $paymentSortName }} </td>
                        <td> {{ $localAuctionEstate->docs }} </td>
                        <td> {{ $localAuctionEstate->delivery_method }} </td>
                        <td class="youicon"> <a href="{{ 'https://'.$estate->youtube }}"><i class="fab fa-youtube"></i></a> </td>
                    </tr>
                </tbody>
            </table>
            <table class="sectab table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th class="fullnote">ملاحظات</th>
                    </tr>
                    <tr>
                        <td class="fullnote full2n">{{ $estate->description }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12">
            <h1>بيانات العقار للمباني</h1>
            <table class="table sectab sectab2 table-bordered table-striped">
                <tbody class="table_oio right-table">
                    <tr>
                        <th>مساحة البناء م٢ </th>
                        <th> تصميم البناء </th>
                        <th> عمر العقار </th>
                        <th> عدد الادوار  </th>
                        <th> عدد الوحدات  </th>
                        <th> رقم الدور </th>
                        <th> رقم الوحدة </th>
                        
                    </tr>
                    <tr>
                        <td> {{ $localAuctionEstate->building_space }}    </td>
                        <td> {{ $localAuctionEstate->building_design }}    </td>
                        <td> {{ $localAuctionEstate->age }}    </td>
                        <td> {{ $localAuctionEstate->floors_number }}    </td>
                        <td> {{ $localAuctionEstate->units_number }}  </td>
                        <td> {{ $localAuctionEstate->floor_number }}  </td>
                        <td> {{ $localAuctionEstate->unit_number }}  </td>
                    </tr>
                    
                    <tr>
                        <th> عدد الغرف </th>
                        <th>عدد الصالات </th>
                        <th> عدد المطابخ  </th>
                        <th> عدد المخازن  </th>
                        <th>  عدد الحمامات  </th>
                        <th> المصاعد  </th>
                        <th> نوع الخزانات الارضية  </th>
                        
                    </tr>
                    <tr>
                        <td> {{ $localAuctionEstate->rooms_number }}  </td>
                        <td> {{ $localAuctionEstate->receptions_number }}  </td>
                        <td>{{ $localAuctionEstate->kitchens_number }}  </td>
                        <td> {{ $localAuctionEstate->stores_number }}  </td>
                        <td> {{ $localAuctionEstate->bathrooms_number }}  </td>
                        <td> {{ $localAuctionEstate->lifts_number }}  </td>
                        <td> {{ $localAuctionEstate->floor_tanks_sort }}  </td>
                    </tr>
                    
                    <tr>
                        <th> نوع الخزانات العلوية  </th>
                        <th> البدروم (تحت الارض) </th>
                        <th>  موقف السيارات (كراج)  </th>
                        <th>  شبكة الكهرباء  </th>
                        <th>  شبكة المياة   </th>
                        <th>  شبكة الغاز    </th>
                        <th>  شبكة الصرف الصحي  </th>
                    </tr>
                    <tr>
                        <td> {{ $localAuctionEstate->overhead_tanks_sort }}  </td>
                        <td> {{ $localAuctionEstate->basement }}  </td>
                        <td> {{ $localAuctionEstate->parking }}  </td>
                        <td> {{ $localAuctionEstate->electricity_network }}  </td>
                        <td> {{ $localAuctionEstate->water_network }}  </td>
                        <td>{{ $localAuctionEstate->gas_network }}  </td>
                        <td> {{ $localAuctionEstate->sewerage_network }}  </td>
                    </tr>
                    
                    

                </tbody>
            </table>
        </div>
    </div>	
</div>
<div class="service_text">
    <h3>الخدمات الداخلية للعقار</h3>
    <p>{{ $localAuctionEstate->internal_services }}</p>
</div>
<div class="service_text">
    <h3>الخدمات الخارجية للعقار</h3>
    <p>{{ $localAuctionEstate->external_services }}</p>
</div>