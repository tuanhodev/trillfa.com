<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;
// use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TopicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return Auth::user()->id = 1;
        return true;
    }

    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;


    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->topic['name']),
        ]);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $id = $this->topic['id'] ?? '';

        return [

            'slug'              => [ Rule::unique('topics')->ignore($id)],
            'topic.parent_id'   => ['nullable'],
            'topic.name'        => ['required'],
            'topic.status'      => ['nullable'],
            'topic.topic_type'  => ['nullable'],
            'topic.ordering'    => ['nullable'],
            'topic.icon'        => ['nullable'],

        ];

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [

            'slug.required'             => 'Test slug requiredd',
            'slug.unique'              => 'Trương tên: Tên chuyên mục đã tông tại',
            'topic.name.required'       => 'Trường tên đang trống',

        ];
    }
}
