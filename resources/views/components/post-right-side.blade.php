{{-- Partials: views.components.post-right-aside --}}

@props(['topics'])
<!--{{-- Right Slide --}}-->
<aside {{ $attributes->merge([ 'class' => 'post-right-aside' ]) }}>
    <!-- {{-- Topic menu module --}} -->
    <div class="aside-topic">
        <h3 class="aside-module-title">Chuyên đề</h3>
        <ul class="aside-module-container">
            @foreach ($topics as $parent)
            @if ($parent->children->count())
            <a href="{{ route('blog.chu-de-chinh', $parent) }}">
                <li class="aside-tpoic-parent"> <x-orchid-icon path="collection" />{{ $parent->name }} </li>
            </a>
            <ul class="aside-topic-sublist-container">
                @foreach ($parent->children as $child)
                <a href="{{ route('blog.topic.posts', $child) }}" class="aside-topic-child">
                    <x-orchid-icon path="bs.dash" />
                    <li>{{ $child->name }}</li>
                </a>
                @endforeach
            </ul>
            @endif
            @endforeach
        </ul>
    </div>
    <!-- {{-- Collection Menu 
    <div class="aside-collection">
        <h3 class="aside-module-title">Bộ Sưu Tập</h3>
        <ul class="aside-module-container">
            @foreach ($collection as $parent)
            <a href="{{ route('blog.topic.posts', $parent) }}" class="aside-collection-child">
                <li><x-orchid-icon path="collection" />{{ $parent->name }}</li>
            </a>
            @endforeach
        </ul>
    </div>
    --}} -->
    <!-- {{-- Tag list module --}} -->
    <div class="aside-tag">
        <h3 class="aside-module-title">Thẻ tag</h3>
        <ul class="aside-module-container">
            @isset($tags)
            @foreach ($tags as $tag)
            @if ($tag->posts->count())
            <a href="{{ route('blog.tag.posts', $tag) }}">
                <x-orchid-icon path="tag" />
                <li>{{ $tag->name }}</li>
            </a>
            @endif
            @endforeach
            @endisset
        </ul>
    </div>
</aside>
