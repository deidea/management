<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CustomerRequest extends Request
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
	          'short' => 'required|min:2|max:4',
	          'name' => 'required|min:3',
	          'website' => 'required|url',
	      ];
    }
}
