<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        $id = $this->product->id;
        return [
            'name' => 'bail|required|max:100|unique:products,name,' . $id,
            'price' => 'bail|required|integer',
            'status' => 'bail|required',
        ];
    }
}
