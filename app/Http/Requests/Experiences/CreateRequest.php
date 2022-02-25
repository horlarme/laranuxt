<?php

namespace App\Http\Requests\Experiences;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'company' => 'required',
            'position' => 'required',
            'started_at' => 'required|date|before:tomorrow',
            'stopped_at' => 'nullable|date|before:tomorrow',
            'description' => 'required'
        ];
    }
}
