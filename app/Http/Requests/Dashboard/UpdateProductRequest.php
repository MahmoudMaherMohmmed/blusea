<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'image' => 'sometimes|mimes:jpeg,png,jpg,svg|dimensions:width=' . config('media.dimensions.product.width') . ',height=' . config('media.dimensions.product.height'),
            'images' => 'nullable|array',
            'images.*' => 'nullable|mimes:jpeg,png,jpg,svg,webp|dimensions:width=' . config('media.dimensions.product.width') . ',height=' . config('media.dimensions.product.height'),
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
