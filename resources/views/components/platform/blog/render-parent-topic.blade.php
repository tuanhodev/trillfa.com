@props([ 'renderParentTopic' => '' ])

@if($renderParentTopic == 'root')
<div style="color: gray">
    <x-orchid-icon path="fa.asterisk" width=12px /> {{ ' ' . $topic->name }}
</div>
@else
<div>
    {!! $renderParentTopic !!}
</div>
@endif
