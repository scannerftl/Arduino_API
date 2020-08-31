<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArduinosRequest extends FormRequest
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
            'name'              => 'required|min:5|max:100|alpha',
            'ipAddress'         => 'required|min:9|max:20|alpha',
            'localisation'      => 'required|min:5|max:250|alpha',
        ];
    }
}
