<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class XYZRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_step.project_name' => 'required|string',
            'first_step.project_desc' => 'required|string',
            'first_step.client' => 'required|string',
            'first_step.contractor' => 'required|string',
            'second_step.max_X' => 'required|numeric',
            'second_step.min_X' => 'required|numeric',
            'second_step.max_Y' => 'required|numeric',
            'second_step.min_Y' => 'required|numeric',
            'second_step.max_Z' => 'required|numeric',
            'second_step.min_Z' => 'required|numeric',
        ];
    }
}
