{{-- Partials: views.components.post-right-aside --}}

@props(['topics'])

<aside {{ $attributes->merge([ 'class' => 'post-right-aside' ]) }}>

<!-- {{-- Topic menu module --}} -->
<div class="aside-topic">

    <h3 class="aside-module-title">Chuyên đề</h3>

    <ul class="aside-module-container">
        @foreach ($topics as $parent)
            @if ($parent->children->count())
                    <li class="aside-tpoic-parent"><x-orchid-icon path="collection" />{{ $parent->name }}</li>
                    <ul class="aside-topic-sublist-container">
                    @foreach ($parent->children as $child)
                        <a href="{{ route('blog.topic.posts', $child) }}" class="aside-topic-child"><li>{{ $child->name }}</li></a>
                    @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>

    </div>  


    <!-- {{-- Tag list module --}} -->
    <div class="aside-tag">

        <h3 class="aside-module-title">Thẻ tag</h3>

        <ul class="aside-module-container">
            @isset($tags)
                @foreach ($tags as $tag)

                    <a href="{{ route('blog.tag.posts', $tag) }}" class="aside-tag">
                        <li>{{ $tag->name }}</li>
                    </a>
                    
                @endforeach
            @endisset

        </ul>

    </div>

</aside>

