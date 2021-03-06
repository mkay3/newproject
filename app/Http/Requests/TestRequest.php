<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'type' => 'required_with:carat|numeric',
            'basis_of_valuation'=>'required',
            'number'=>'min:1',
            'gender'=>'required',
            'language'=>'required'
        ];
    }

    public function messages(){
        return[
            'required' => " :attribute can't be left blank",
            'basis_of_valuation.required' => 'please fill the :attribute'
        ];
    }
}
