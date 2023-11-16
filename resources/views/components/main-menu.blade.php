{{-- Components: views.components.main-memu --}}

@props(['topics'])

@isset($topics)

<nav x-data="{ listShow: '' }" {{ $attributes->merge([ 'class' => 'main-menu-container' ]) }}>

    <div class="container mx-auto main-menu">

        <a href="{{ route('home') }}" class="main-menu-parent">
            <x-orchid-icon path="house-fill" />
            <span>{{ __('Trang chính') }}</span>
        </a>

        @foreach ($topics as $parent)

        @if ($parent->children->count())
        <div class="main-menu-box">

            <a 
                @click.prevent="listShow = '{{ $parent->name }}'" @mouseover="listShow = '{{ $parent->name }}'"
                class="main-menu-parent"
                >
                <x-orchid-icon path="collection" />
                <span>{{ $parent->name }}</span>
            </a>

            <ul class="main-menu-children" x-cloak x-transition @click.outside="listShow = null"
                x-show="listShow == '{{ $parent->name }}'">
                @foreach ($parent->children as $child)
                    <a href="{{ route('blog.topic.posts', $child) }}" class="menu-children-item">
                        <li>{{ $child->name }}</li>
                    </a>
                @endforeach

            </ul>

        </div>
        @endif
        @endforeach
    </div>

</nav>

@endisset
