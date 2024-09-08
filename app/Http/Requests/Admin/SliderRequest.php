<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'banner' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:2048'],
           'type' => ['string', 'max:200'],
          'title' => ['required', 'max:200'],
            'starting_price' => ['required', 'numeric', 'min:0'],
            'btn_url' => ['url'],
           'serial' => ['required', 'integer'],
           'status' => ['required']
        ];
    }
}
