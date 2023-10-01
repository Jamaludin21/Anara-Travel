<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipantRequest extends FormRequest
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
            // 'name' => ['required', 'string', 'max:255'],
            // 'passport' => ['required', 'integer'],
            // 'gender' => ['required', 'boolean'],
            // 'group' => ['required', 'integer'],
            // 'start' => ['required', 'string'],
            // 'birth' => ['required', 'date'],
            // 'passport_exp' => ['required', 'date'],
            // 'upload_passport' => 'required|mimes:jpeg,jpg,png'
        ];
    }
}