@props(['active', 'icon' => 'foldrer'])

@php

$classes = ($active ?? false)
    ? 'nav-link text-underline-primary-active'
    : 'nav-link text-primary hover:text-primary';
@endphp


<a {{ $attributes->merge([ 'class' => $classes ]) }}>
    <x-orchid-icon path="{{ 'bs.' . $icon }}" />
    <label for=""> {{ $slot }} </label>
</a>
