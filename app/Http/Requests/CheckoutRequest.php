<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class CheckoutRequest extends FormRequest {

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
            'address1' => 'required',
            'location' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        $vars = Cache::get('vars');
        return [
            'first_name.required' => $vars['nume'].' '.$vars['este_obligatoriu'],
            'email.required' => $vars['email'].' '.$vars['este_obligatoriu'],
            'email.email' => $vars['email'].' '.$vars['trebuie_sa_fie_valid'],

        ];
    }

}
