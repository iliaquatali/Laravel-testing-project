<?php

namespace App\Http\Requests\User;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => ['required', Rule::unique('users', 'name')->ignore($this->user)],
            'emial' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',


        ];
    }
}
