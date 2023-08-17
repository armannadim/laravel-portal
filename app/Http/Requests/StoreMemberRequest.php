<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'brief_bio' => 'max:300',
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'email' => 'email:rfc,dns',
            'facebook' => 'url:http,https',
            'twitter' => 'url:http,https',
            'instagram' => 'url:http,https',
            'youtube' => 'url:http,https',
            'linkedin' => 'url:http,https',
            'phone' => 'numeric'
        ];
    }
}
