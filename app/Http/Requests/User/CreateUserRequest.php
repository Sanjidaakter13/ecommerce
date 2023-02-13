<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'pro_name'=>'required',
            'category_name'=>'required',
            'pro_quantity'=>'required|integer|min:1|max:10',
            'pro_price'=>'required|numeric|min:1',
            'pro_weight'=>'required|numeric',
        ];
    }
}
