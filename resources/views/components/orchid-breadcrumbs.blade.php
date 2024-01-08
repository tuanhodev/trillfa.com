
{{-- component: orchid-breadcrumbs  --}}
{{-- @dd(Breadcrumbs::current()) --}}
@props(['icon' => 'bs.folder-fill'])

@if(Breadcrumbs::has())
<div class="breadcrumbs-container container mx-auto">
    <div class="breadcrumbs">
        @foreach (Breadcrumbs::current() as $crumbs)
            @if ($crumbs->url() && !$loop->last)
                <a class="breadcrumbs-link" href="{{ $crumbs->url() }}">
                    @if ($crumbs->url() == route('home'))
                    <x-orchid-icon path="bs.house-fill" />
                    @else
                    <x-orchid-icon path="{{ $icon }}" />
                    @endif
                    <li class="breadcrumbs-item">
                    {{ $crumbs->title() }}
                    </li>
                </a>
            @else
                <a class="breadcrumbs-link">
                    <x-orchid-icon path="caret-right" />
                    <li class="breadcrumbs-item active">
                        {{ $crumbs->title() }}
                    </li>
                </a>
            @endif
        @endforeach
    </div>
</div>
@endif
