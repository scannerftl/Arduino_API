<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MethodsRequest extends FormRequest
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
            'name'              => 'required|min:2|max:100|alpha',
            'parameters'        => 'required|max:100|alpha',
            'appliedTo'         => 'required|min:1|max:100|alpha',
        ];
    }
}
