<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequest extends FormRequest
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
            'title' => 'required|max:150|unique:articles',
            'content' => 'required'
            //
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "العنوان مطلوب",
            'title.max' => "العنوان يجب ان يكون اقل من 150 حرف",
            'title.unique' => "العنوان لابد ان يكون فريد",
            'content.required' => "المحتوى مطلوب",
        ];
    }

}
