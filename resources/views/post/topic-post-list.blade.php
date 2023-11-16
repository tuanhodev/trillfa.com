{{-- ------- page: views.post.topic-post-list ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . $topic ? $topic->name : 'Chuyên đề' }}
    </x-slot>

</x-layouts.app>
