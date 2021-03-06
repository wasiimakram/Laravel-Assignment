<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompaniesRequest extends FormRequest
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
            'name'=>'required|max:255',
            'image_path' => 'dimensions:min_width=100,min_height=100',
        ];
    }
    public function messages()
    {
        return [
            'image_path.dimensions' => 'Please upload Image of Minimum 100*100 Dimensions.',
        ];
    }
}
