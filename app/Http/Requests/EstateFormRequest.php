<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        

        $estateValidation = [
            'area_id' => 'required|numeric',
            'center' => 'required|min:3',
            'neighborhood' => 'required|min:3',
            'street' => 'required|min:10',
            'address' => 'required|min:10',
            'name' => 'required',
            'category_id' => 'required|numeric',
            'sort_id' => 'required|numeric',
            'offer_id' => 'required|numeric',
            'youtube' => 'required',

            'latlng' => 'required',
            'advertiser_name' => 'required|min:10',
            'advertiser_sort_id' => 'required|numeric',
            'mobile1' => 'required|min:10',
            'mobile2' => 'required|min:10',
            'telephone' => 'required|min:10',
            'fax' => 'required|min:10',
            'central' => 'required|min:10',
            'email' => 'required|email|min:10',
            'website' => 'required|string|min:10',

            'duration_id' => 'required|numeric',
            'duration_publish' => 'in:شهر, 3 شهور,6 شهور,سنة',
            'g-recaptcha-response' => 'required|captcha',
           
        ];

        $localAuctionEstateValidation = [

            'schema_name' => 'required|min:10',
            'schema_number' => 'required|numeric',
            'block_number' => 'required|numeric',
            'piece_number' => 'required|numeric',
            'streets_number' => 'required|numeric',
            'destination_id' => 'required|numeric',
            'estate_space' => 'required|numeric',
            'price' => 'required|numeric',
            'price_sort_id' => 'required|numeric',
            'payment_sort_id' => 'required|numeric',
            'docs' => 'in:بصك,بدون صك,أخرى',
            'delivery_method' => 'in:فورى,أخرى',
            'description' => 'required|min:3|max:1000',
            'building_space' => 'required|numeric',
            'building_design' => 'in:0,00',
            'age' => 'required|numeric',
            'floors_number' => 'required|numeric',
            'units_number' => 'required|numeric',
            'floor_number' => 'required|numeric',
            'unit_number' => 'required|numeric',
            'rooms_number' => 'required|numeric',
            'receptions_number' => 'required|numeric',
            'kitchens_number' => 'required|numeric',
            'stores_number' => 'required|numeric',
            'bathrooms_number' => 'required|numeric',
            'lifts_number' => 'required|numeric',
            'floor_tanks_sort' => 'in:نوع,نوع اخر',
            'overhead_tanks_sort' => 'in:نوع,نوع اخر',
            'basement' => 'in:يوجد, لا يوجد',
            'parking' => 'in:يوجد, لا يوجد',
            'electricity_network' => 'in:يوجد, لا يوجد',
            'water_network' => 'in:يوجد, لا يوجد',
            'gas_network' => 'in:يوجد, لا يوجد',
            'sewerage_network' => 'in:يوجد, لا يوجد',
            'internal_services' => 'required|min:3|max:1000',
            'external_services' => 'required|min:3|max:1000',

        ];

        $auctionEstateValidation = [
            'date' => 'required|date',
            'time' => 'required|time',
        ];

        switch ($this->adSort) {
            case 'local_estate' && $this->choice_type == "on":
                $estateValidation = array_merge($estateValidation, $localAuctionEstateValidation);
                break;
            
            case 'auction_estate':
                $estateValidation = array_merge($estateValidation, $auctionEstateValidation);
                $estateValidation = array_merge($estateValidation, $localAuctionEstateValidation);
                break;
        }

        //dd($this->adSort);
        return $estateValidation;
    }
}
