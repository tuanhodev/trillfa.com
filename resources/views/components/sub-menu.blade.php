@props(['parentTopic', 'icon'])

@php
    $classes = '';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>

    <div class="font-bold">
        {{ $parentTopic ? $parentTopic->name : '' }}
    </div>

    <div class="topic-item-container">
        @foreach($parentTopic->children as $key => $item)
        <div class="topic-item hover:text-primary-active">
            <a href="{{ route('blog.topic.posts', $item) }}">
                {{ $item->name }}
            </a>
        </div>
        @endforeach
    </div>
</div>

