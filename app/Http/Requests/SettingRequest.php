<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Setting;

class SettingRequest extends FormRequest
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
        $id = $this->input('setting.id');

        return [

            'setting.label'       => [ 'required'],
            'setting.key'         => [ 'required', Rule::unique(Setting::class, 'key')->ignore($id)],
            'setting.value'       => [ 'required'],
            'setting.attributes'  => [ 'nullable'],

        ];
    }
}
