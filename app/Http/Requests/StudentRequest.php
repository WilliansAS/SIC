<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_student' => 'required|string|max:255',
            'lastname_student' => 'required|string|max:255',
            'id_student' => 'required|string|max:10',
            'birthday' => 'required|date',
            'comment' => 'nullable|string',
        ];
    }
}
