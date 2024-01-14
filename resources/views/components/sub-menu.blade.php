{{-- component: sub-menu --}}

@props(['parentTopic', 'icon'= 'folder'])

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
            <a href="{{ route('blog.topic.posts', $item) }}">
                <x-orchid-icon path="{{ 'bs.' . $icon }}" />
                {{ $item->name }}
            </a>
        </li>
        @endforeach
    </ul>

</div>

