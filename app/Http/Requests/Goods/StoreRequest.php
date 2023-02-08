<?php

namespace App\Http\Requests\Goods;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'price_from' => 'required|integer|min:0|max:99999',
            'price_to' => 'required|integer|min:0|max:99999',
            'type' => 'required|integer',

        ];
    }
}
