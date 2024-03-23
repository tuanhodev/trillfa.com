{{-- Components: views.components.main-memu --}}

@props(['topics'])

@isset($topics)

<nav {{ $attributes->merge([ 'class' => 'main-menu-container' ]) }}>

    <div x-data="{ listShow: '' }" class="container main-menu">

        <x-nav-link 
            @mouseover="listShow = ''"
            :active="request()->routeIs('home')"
            :url="route('home')"
            icon="house" 
            class="relative"
            > 
            {{ __('Trang chính') }}
        </x-nav-link>
        <x-nav-link 
            @mouseover="listShow = ''"
            :active="request()->routeIs('blog.index')"
            :url="route('blog.index')"
            icon="newspaper" 
            class="relative"
            > 
            {{ __('Blog') }}
        </x-nav-link>

        <!-- {{-- Topic Menu --}} -->
        @foreach ($topics as $parent)

            @php
                $url = route('blog.chu-de-chinh', $parent);
            @endphp

            @if ($parent->children->count())
                <div class="main-menu-box">
                    <x-nav-link 
                        @click="listShow = '{{ $parent->name }}'"
                        @mouseover="listShow = '{{ $parent->name }}'"
                        :active="Request::url() == $url" 
                        :url="$url"
                        :icon="$parent->icon" 
                        class="relative"
                        > 
                        {{ $parent->name }}
                    </x-nav-link>
                    <ul class="main-menu-children" 
                        x-show="listShow == '{{ $parent->name }}'"
                        @click.outside="listShow = null"
                        x-cloak x-transition 
                        >
                        @foreach ($parent->children as $child)
                            <x-nav-link 
                                @click="listShow = '{{ $parent->name }}'"
                                @mouseover="listShow = '{{ $parent->name }}'"
                                :active="Request::url() == route('blog.topic.posts', $child)" 
                                :url="route('blog.topic.posts', $child)"
                                :icon="$child->icon" 
                                > 
                                {{ $child->name }}
                            </x-nav-link>
                        @endforeach
                    </ul>

                </div>
            @endif
        @endforeach
        <x-nav-link 
            @mouseover="listShow = ''"
            :active="request()->routeIs('about')"
            :url="route('about')"
            icon="person-vcard" 
            class="relative"
            > 
            {{ __('Giới thiệu') }}
        </x-nav-link>

    </div>

</nav>

@endisset
