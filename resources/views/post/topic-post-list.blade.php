{{-- ------- page: views.post.topic-post-list ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle"> {{ $topic->name }} </x-slot>

    @isset($topic->meta_keywords)
        <x-slot name="metaKeywords">{{ $topic->meta_keywords }}</x-slot>
        <x-slot name="metaNewsKeywords">{{ $topic->meta_keywords }}</x-slot>
    @endisset

    @empty($topic->meta_description)
        <x-slot name="metaDes">{{ config('settings.description')}}</x-slot>
    @else 
        <x-slot name="metaDes">{{ $topic->meta_description }}</x-slot>
    @endempty

    <x-page-top-banners bannersGroup="banners-topic" />

    <div class="mx-auto container container-layout">

        <div class="left-content">

            <x-orchid-breadcrumbs />

            <div class="post-list-container">

                <div class="post-list">
                    @foreach ($posts as $post)

                    <x-post-card class="post-card" :post="$post" />

                    @endforeach
                </div>

            </div>

            <!-- {{-- Pagination --}} -->
            <div class="post-pagination">

                {{ $posts->links()}}

            </div>

        </div>

        <x-post-right-side />

    </div>

</x-layouts.app>
