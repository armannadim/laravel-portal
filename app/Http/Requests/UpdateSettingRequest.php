<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateSettingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return  [
            'site_name' => 'required|unique:settings,site_name,'.$this->id,
            'image' => 'image|mimes:jpg,png,jpeg,gif',
            'email' => 'nullable|email:rfc,dns',
            'facebook' => 'nullable|url:http,https',
            'twitter' => 'nullable|url:http,https',
            'instagram' => 'nullable|url:http,https',
            'youtube' => 'nullable|url:http,https',
            'linkedin' => 'nullable|url:http,https',
            'phone' => 'nullable|numeric'
        ];
    }
}
