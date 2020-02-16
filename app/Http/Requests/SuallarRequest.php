<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuallarRequest extends FormRequest
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
            'question' => 'required|max:15000',
            'title' => 'required|max:30',

            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'min:2',
            'option_d' => 'min:2',
            'option_e' => 'min:2',
            // 'is_correct' => 'min:2',
            // 'is_correct2' => 'min:2',
            // 'is_correct3' => 'min:2',
            // 'is_correct4' => 'min:2',
            // 'is_correct5' => 'min:2'
        ];
    }
}
