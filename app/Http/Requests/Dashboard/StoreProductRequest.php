<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'short_description' => 'required|array',
            'short_description.*' => 'string',
            'description' => 'required|array',
            'description.*' => 'string',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
            'price' => 'required|numeric',
            'price_after_discount' => 'nullable|numeric',
            'special' => 'required',
            'best_seller' => 'required',
            'tags' => 'required|array',
            'tags.*' => 'required|array',
            'tags.*.*' => 'required|string',
            'image' => 'required|mimes:jpeg,png,jpg,svg|dimensions:width=' . config('dimensions.products.width') . ',height=' . config('dimensions.products.height'),
            'images' => 'required|array',
            'images.*' => 'required|mimes:jpeg,png,jpg,svg,webp|dimensions:width=' . config('dimensions.products.width') . ',height=' . config('dimensions.products.height'),
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
        return trans('products.attributes');
    }
}
