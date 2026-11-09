<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSeedRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seasons' => ['required', 'array', 'min:1'],
            'seasons.*' => ['required', 'integer', 'distinct', 'exists:seasons,id'],
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:0', 'max:999999'],
            'days-to-grow' => ['required', 'integer', 'min:1', 'max:30'],
            'regrowable' => ['required', 'boolean'],
            'regrow-days' => ['nullable', 'required_if:regrowable,true', 'integer', 'min:1', 'max:30'],
        ];
    }
}
