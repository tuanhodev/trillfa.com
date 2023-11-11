{{-- Partials: views.components.post-right-aside --}}

@props(['topics'])

<aside {{ $attributes->merge([ 'class' => 'post-right-aside' ]) }}>

    <div class="aside-topic">

        <h3 class="aside-module-title">Chuyên đề</h3>

        <ul class="aside-topic-list-container">
            @foreach ($topics as $parent)
                @if ($parent->children->count())
                    <li class="aside-tpoic-parent"><x-orchid-icon path="collection" />{{ $parent->name }}</li>
                    <ul class="aside-topic-sublist-container">
                    @foreach ($parent->children as $child)
                        <a class="aside-topic-child"><li>{{ $child->name }}</li></a>
                    @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>

    </div>  

</aside>

