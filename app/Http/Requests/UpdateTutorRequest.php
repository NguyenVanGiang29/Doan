<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseRequest;
class UpdateTutorRequest extends BaseRequest
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
            'address' => 'required|max:255',
            'phone' => 'required',
            'image_file' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'address' => 'address',
            'phone' => 'required',
            'image_file' => 'required',
        ];
    }
}
