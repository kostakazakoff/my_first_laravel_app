<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreEstateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        /*
        TODO: false for production
        */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required',
            'title'=> 'required | min:2 | max:100',
            'city' => 'required | min:2 | max:100',
            'address' => 'required | min:2 | max:200',
            'type' => 'required | min:2 | max:100',
            'rooms' => 'required',
            'price' => 'not required | default:0',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User id is required',
            'title.required' => 'Body is required',
            // 'title.min' => 'Title must have minimum 2 characters',
            // 'title.max' => 'Title must have maximum 100 characters',
            // 'address.required' => 'Address is required',
            // 'address.min' => 'Address must have minimum 2 characters',
        ];
    }
}
