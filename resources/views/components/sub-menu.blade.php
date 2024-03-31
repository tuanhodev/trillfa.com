{{-- component: sub-menu --}}

@props(['parentTopic'])

@php
    $classes = 'sub-list';
@endphp

                        {{-- :active="request()->routeIs($menu->route)" --}}
<div {{ $attributes->merge(['class' => $classes]) }}>

    @if($parentTopic)
        @php
            $url = route('blog.topic.posts', $parentTopic);
        @endphp
        <a href="{{ route('blog.topic.posts', $parentTopic) }}" 
            class="sub-list-title @if (Request::url() == $url) active @endif"
            >
            {{ $parentTopic->name }}
        </a>
    @endif

    <ul class="list">
        @foreach($parentTopic->children as $key => $item)
            @php
                $url = route('blog.topic.posts', $item);
            @endphp
            @if ($item->posts->count())
            <li class="list-item @if (Request::url() == $url) active @endif">
                <x-orchid-icon path="{{ 'bs.' . $item->icon }}" />
                <a href="{{ route('blog.topic.posts', $item) }}">
                    {{ $item->name }}
                </a>
            </li>
            @endif
        @endforeach
    </ul>

</div>

