<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;

class ContactFormRequest extends FormRequest {

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
            'first_name' => 'required|min:2|max:20|regex:/^[a-zA-Z]+$/u',
            'last_name' => 'required|min:2|max:30|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'msg' => 'required|min:10|max:500'
        ];
    }

    public function messages()
    {
        $vars = Cache::get('vars');
        return [
            'first_name.required' => 'Câmpul'.' '.$vars['first_name'].' '.$vars['este_obligatoriu'],
            'last_name.required' => 'Câmpul'.' '.$vars['last_name'].' '.$vars['este_obligatoriu'],
            'email.required' => 'Câmpul'.' '.$vars['email'].' '.$vars['este_obligatoriu'],
            'phone.required' => 'Câmpul'.' '.$vars['phone'].' '.$vars['este_obligatoriu'],
            'msg.required' => 'Câmpul'.' '.$vars['msg'].' '.$vars['este_obligatoriu'],
            'first_name.min' => 'Valoarea câmpului'.' '.$vars['first_name'].' '.$vars['val_small'],
            'last_name.min' => 'Valoarea câmpului'.' '.$vars['last_name'].' '.$vars['val_small'],
            'msg.min' => 'Valoarea câmpului'.' '.$vars['msg'].' '.$vars['val_small'],
            'first_name.max' => 'Valoarea câmpului'.' '.$vars['first_name'].' '.$vars['val_large'],
            'last_name.max' => 'Valoarea câmpului'.' '.$vars['last_name'].' '.$vars['val_large'],
            'msg.max' => 'Valoarea câmpului'.' '.$vars['msg'].' '.$vars['val_large'],
            'email.email' => 'Câmpul'.' '.$vars['email'].' '.$vars['valid'],
            'phone.numeric' => 'Câmpul'.' '.$vars['phone'].' '.$vars['valid_phone'],
            'first_name.regex' => 'Câmpul'.' '.$vars['first_name'].' '.$vars['not_regex'],
            'last_name.regex' => 'Câmpul'.' '.$vars['last_name'].' '.$vars['not_regex'],
            
        ];
    }

}
