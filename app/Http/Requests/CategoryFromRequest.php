<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoryFromRequest
 *
 * @package App\Http\Requests
 */
class CategoryFromRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return ['naam' => ['required', 'string', 'max:255'], 'beschrijving' => ['required', 'string']];
    }
}
