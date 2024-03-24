{{-- component: nav-link   --}}

@props(['active', 'icon' => 'foldrer', 'url'])

@php
    $classes = ($active ?? false) ? 'nav-link active' : 'nav-link';
@endphp

@isset($url)
    <a href="{{$url}}" {{ $attributes->merge([ 'class' => $classes ]) }}>
        <x-orchid-icon path="{{ 'bs.' . $icon }}" />
        <li for="">{{ $slot }}</li>
    </a>
@else
    <a {{ $attributes->merge([ 'class' => $classes ]) }}>
        <x-orchid-icon path="{{ 'bs.' . $icon }}" />
        <li for=""> {{ $slot }} </li>
    </a>
@endisset
