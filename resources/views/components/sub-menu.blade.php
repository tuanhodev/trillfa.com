{{-- component: sub-menu --}}

@props(['parentTopic'])

@php
    $classes = 'sub-list';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>

    <div class="sub-list-title">
        {{ $parentTopic ? $parentTopic->name : '' }}
    </div>

    <ul class="list">
        @foreach($parentTopic->children as $key => $item)
        <li class="list-item">
            <x-orchid-icon path="{{ 'bs.' . $item->icon }}" />
            <a href="{{ route('blog.topic.posts', $item) }}">
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>

</div>

