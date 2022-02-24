<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'full_name' => 'required',
            'email' => 'required|email',
            'social_facebook' => 'required',
            'social_instagram' => 'required',
            'social_twitter' => 'required',
            'social_github' => 'required',
            'social_linkedin' => 'required',
            'bio' => 'required'
        ];
    }
}
