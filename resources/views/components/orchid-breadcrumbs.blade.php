@if(Breadcrumbs::has())
<div class="breadcrumbs-container container mx-auto">
    <div class="breadcrumbs">
        @foreach (Breadcrumbs::current() as $crumbs)
            @if ($crumbs->url() && !$loop->last)
                <a class="breadcrumbs-link" href="{{ $crumbs->url() }}">
                    <li class="breadcrumbs-item">
                    {{ $crumbs->title() }}
                    </li>
                </a>
            @else
                <li class="breadcrumbs-item active">
                    {{ $crumbs->title() }}
                </li>
            @endif
        @endforeach
    </div>
</div>
@endif
