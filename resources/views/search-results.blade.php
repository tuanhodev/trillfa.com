{{-- ------- page: views.post.topic-post-list ---------- --}}

@php
$count = $searchResults->count();
$currentText = 'Tìm thấy ' . $count . ' kết quả';
@endphp

<x-layouts.app>

    <x-slot name="pageTitle"> {{ config('settings.ten-thuong-hieu') . ' | ' . 'Kết quả tìm kiếm' }} </x-slot>

    <div class="mx-auto container container-layout">

        <div class="left-content">

            <x-orchid-breadcrumbs />

                <br>
                {{ $currentText }}

            <div class="post-list-container">

                <div class="post-list">
                    @if($searchResults->count())
                        @foreach($searchResults->groupByType() as $type => $results)
                        @foreach($results as $model)
                        <x-post-card class="post-card" :post="$model->searchable" />
                        @endforeach
                        @endforeach
                    @else
                        <p>!Không có kết quả</p>
                    @endif
                </div>

            </div>

        </div>

        <x-post-right-side />

    </div>

</x-layouts.app>
