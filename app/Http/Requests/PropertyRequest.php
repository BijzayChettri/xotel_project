<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
        return [
            'email' => 'required|email:rfc,dns',
            'name' => 'required|unique:users,username',
            'phone' => 'required|max:10',
            'pin' => 'required|max:6',
            'address' => 'required',
            'type' => 'required',
            'owner_name' =>'required',
            'amenities' =>'required',

            // 'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
        
    }
}
