<div class="row">
    <div class="col-8 border-right">
        @foreach($mainContent as $content)
        {!! $content !!}
        @endforeach
    </div>
    <div class="col-4 no-gutter">
        @foreach($rightBar as $bar)
        {!! $bar !!}
        @endforeach
    </div>
</div>
