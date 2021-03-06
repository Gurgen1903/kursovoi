<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPost extends Request
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
            'email' => 'required|email|max:255',
            'password' => 'required|min:6',
            'name' => 'required|max:100',
            'confirm_password' => 'same:password|required|max:100',
        ];
    }
}
