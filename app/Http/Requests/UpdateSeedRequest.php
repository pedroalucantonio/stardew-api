<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSeedRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'seasons' => ['sometimes', 'required', 'array', 'min:1'],
            'seasons.*' => ['required', 'integer', 'distinct', 'exists:seasons,id'],
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'type' => ['sometimes', 'required', 'in:semente,produto'],
            'price' => ['sometimes', 'required', 'integer', 'min:0', 'max:999999'],
            'days-to-grow' => ['sometimes', 'required', 'integer', 'min:1', 'max:30'],
            'regrowable' => ['sometimes', 'required', 'boolean'],
            'regrow-days' => ['nullable', 'required_if:regrowable,true', 'integer', 'min:1', 'max:30'],
        ];
    }
}
