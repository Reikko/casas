<?php

namespace azf\Http\Requests;

use azf\Http\Requests\Request;

class LoginRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
