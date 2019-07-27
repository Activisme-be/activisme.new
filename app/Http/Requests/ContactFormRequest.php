<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContactFormRequest
 *
 * @package App\Http\Requests
 */
class ContactFormRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'naam'      => ['required', 'string', 'max:120'],
            'email'     => ['required', 'string', 'email', 'max:255'],
            'onderwerp' => ['required', 'string'],
            'bericht'   => ['required', 'string'],
        ];
    }
}
