<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(User $user)
    {
        return true;
        // if ($user->can('edit articles')) {
        //     return true;
        // }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'         => 'required|email', //alpha - The field under validation must be entirely alphabetic characters.
            'description'   => 'required|string',
            'slug'          => 'required|string'
        ];
    }
}
