<?php

namespace App\Http\Requests;

use AllowDynamicProperties;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

#[AllowDynamicProperties]
class DriverUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'firstName' => 'required',
            'lastName'  => 'required',
            'email'     => 'required|email|unique:driver_user',
            'phone'     => 'required|min:11',
            'dateBirth' => 'required|date',
            'sex'       => 'required',
            'cpfRne'    => 'required|unique:driver_user',
        ];

        if(in_array($this->method(), ['POST', 'PUT', 'PATCH'])){

            $rules['email'] = [
                'required',
                'email',
                Rule::unique('driver_user')->ignore($this->id)
            ];

            $rules['cpfRne'] = [
                'required',
                Rule::unique('driver_user', 'cpf_rne')->ignore($this->id)
            ];
        }

        return $rules;
    }
}
