<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCollectionRequest extends FormRequest
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
            'description' => 'nullable|array',
            'description.*' => 'nullable|string',
            'products_ids' => 'required|array',
            'products_ids.*' => 'required|exists:products,id',
            'image' => 'sometimes|mimes:jpeg,png,jpg,svg,webp|dimensions:width=' . config("media.dimensions.collection.$this->id.width") . ',height=' . config("media.dimensions.collection.$this->id.height"),
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
        return trans('collections.attributes');
    }
}
