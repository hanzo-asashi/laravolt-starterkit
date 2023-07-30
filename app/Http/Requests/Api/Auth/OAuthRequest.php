<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class OAuthRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'provider' => ['required', 'string', 'in:facebook,twitter-oauth-2,linkedin,google,github,gitlab,bitbucket'],
            'access_token' => ['required', 'string',],
        ];
    }
}
