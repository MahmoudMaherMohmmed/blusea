<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBranchRequest extends FormRequest
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
        return [
            'title' => 'required|array',
            'title.*' => 'string',
            'address' => 'required|array',
            'address.*' => 'required|string',
            'google_map' => 'required|string',
            'phone_number_1' => 'required|string',
            'phone_number_2' => 'nullable|string',
            'telephone_number' => 'required|string',
            'email_1' => 'required|email',
            'email_2' => 'nullable|email',
            'status' => 'required',
        ];
    }
}
