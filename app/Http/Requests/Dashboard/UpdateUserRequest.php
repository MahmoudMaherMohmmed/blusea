<?php

namespace App\Http\Requests\Dashboard;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255|email|unique:users,email,' . $this->user->id,
            'phone' => 'required|min:3|max:255|unique:users,phone,' . $this->user->id,
            'password' => 'nullable|min:8|max:255|confirmed',
            'image' => 'sometimes|mimes:jpeg,png,jpg,svg',
            'status' => 'required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('admins.attributes');
    }
}
