<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        return [
            //'area_id' => 'required|numeric',
            'name' => 'required|min:10|max:191',
            //'mobile' => 'required|numeric|min:10',
            'email' => 'required|string|email',
            //'service_id' => 'required|numeric',
            'body' => 'required'
        ];
    }
}
