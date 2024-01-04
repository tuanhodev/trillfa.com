<?php

namespace App\Http\Requests\Blog;

use App\Models\Blog\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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

        $postId = $this->input('post.id');

        return [

            'title' => ['required'],
            'slug' => ['required', Rule::unique(Post::class, 'slug')->ignore($postId)],
            'post.description' => ['nullable'],
            'post.content' => ['nullable'],
            'post.anchor_link' => ['nullable'],
            'post.thumbnail' => ['nullable'],
            'post.status' => ['nullable'],
            'post.post_type' => ['nullable'],
            'post.published_at' => ['nullable'],
            'post.meta_keywords' => ['nullable'],
            'post.meta_description' => ['nullable'],
            'post.featured' => ['nullable'],

        ];
    }

    public function messages()
    {
        return [

            'title.required' => 'Trường tiêu đề đang trống.',
            'slug.unique' => 'Tiêu đề đã tồng tại',

        ];
    }
}
