{{-- Components: views.components.breadcrumbs --}}

@props(['blog', 'topic', 'tag', 'current', 'currentIcon' => 'bs.postcard'])

<div class="breadcrumbs-container container mx-auto">

    <ul class="breadcrumbs">

        <a href="/" class="breadcrumbs-link">
            <x-orchid-icon path="bs.house-fill" />
            <li>{{ __('Trang chủ') }}</li>
        </a>

        @isset($blog)
            <a href="{{ route('blog.index') }}" class="breadcrumbs-link">
                <x-orchid-icon path="bs.newspaper" />
                <li>{{ __('Blog') }}</li>
            </a>
        @endisset

        @isset($shop)
            <a class="breadcrumbs-link">
                <x-orchid-icon path="bs.shop" />
                <li>{{ __('Shop') }}</li>
            </a>
        @endisset

        @isset($topic)
            <a class="breadcrumbs-link">
                <x-orchid-icon path="bs.collection-fill" />
                <li>{{ __('shop') }}</li>
            </a>
        @endisset

        @isset($current)
            <a class="breadcrumbs-link">
            <x-orchid-icon path="{{$currentIcon}}" />
                <li>{{ $current }}</li>
            </a>
        @endisset

    </ul>

</div>
