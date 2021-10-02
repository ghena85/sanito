<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class ReviewRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'text' => 'required',
            'stars' => 'required|numeric'
        ];
    }


    public function messages()
    {
        $vars = Cache::get('vars');
        return[
            'first_name.required' => 'Campul este obligatoriu de completat',
            'last_name.required' => 'Campul este obligatoriu de completat',
            'text.required' => 'Campul este obligatoriu de completat',
            'stars.required' => 'Campul este obligatoriu de completat',
            'stars.numeric' => 'Campul este obligatoriu sa fie numeric'
        ];
    }
}
