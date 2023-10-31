@props(['active', 'icon' => 'foldrer'])

@php

$classes = ($active ?? false) ? 'nav-link active' : 'nav-link';

@endphp


<a {{ $attributes->merge([ 'class' => $classes ]) }}>
    <x-orchid-icon path="{{ 'bs.' . $icon }}" />
    <label for=""> {{ $slot }} </label>
</a>
