<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title.*' => 'string|min:3|max:255',
            'description' => 'required|array',
            'description.*' => 'string',
            'image' => 'required|mimes:jpeg,png,jpg,svg,webp|dimensions:width=' . config('media.dimensions.blog.width') . ',height=' . config('media.dimensions.blog.height'),
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
        return trans('blogs.attributes');
    }
}
