<?php

namespace App\Http\Requests;

use App\Rules\FullNameRule;
use Illuminate\Foundation\Http\FormRequest;

class DocumentFormRequest extends FormRequest
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
           'fullname' => ['required', 'string', new FullNameRule],
           'cv' => 'required|mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
           'guarantor_form' => 'required|mimes:doc,docx,pdf|max:2048',
           'refone' => 'required|mimes:doc,docx,pdf|max:2048',
           'reftwo' => 'required|mimes:doc,docx,pdf|max:2048',
           'degree' => 'required|mimes:png,jpg,jpeg,doc,docx,pdf|max:2048',
           'licence' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
           'drivers_licence' => 'required|mimes:png,jpg,jpeg,pdf|max:2048',
           'identity' => 'mimes:png,jpg,jpeg|max:2048',
           'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
           'proof_add_one' => 'required|mimes:doc,docx,pdf|max:2048',
           'proof_add_two' => 'required|mimes:doc,docx,pdf|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'cv.max' => 'Cv is Too Large',
        ];
    }
}
