<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeUpdateUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        $id  = $this -> id ?? '';

        $rules  = [
           'name' => [
            'min:3',
            'required',
            'string'
           ],

           'email' => [
            'min:4',
            'max:24',
            'required',
            'unique:users,email,{$id},id'
           ],

           'password' => [
            'required',
            'min:3',
            'max:12'
           ]
       
        ];

        if($this->method('PUT')){
             $rules['password'] = [
                 'min:3',
                 'max:12',
                 'nullable' 
             ];
        };

        return $rules;
    }
}
