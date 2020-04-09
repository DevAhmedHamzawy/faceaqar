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
            'neighborhood' => 'required|min:3',
            'name' => 'required|min:10',
           

            'advertiser_name' => 'required|min:10',
            'advertiser_sort_id' => 'required|numeric',
            'mobile1' => 'required|min:10',            

            'duration_publish' => 'in:شهر,3 شهور,6 شهور,سنه',
            'latlng' => 'required',
            //'estateimages' => 'required',
        ];

        $custom = [
            'category_id' => 'required|numeric',
            'sort_id' => 'required|numeric',
            'offer_id' => 'required|numeric',
        ];

        if($this->adSort != 'schema_estate') { array_push($estateValidation, $custom); }

        return $estateValidation;
    }
}
