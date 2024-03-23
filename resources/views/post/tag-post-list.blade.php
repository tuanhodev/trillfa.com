{{-- ------- page: views.post.tag-post-list ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle"> {{ $tag->name }} </x-slot>

    @isset($tag->meta_keywords)
        <x-slot name="metaKeywords">{{ $tag->meta_keywords }}</x-slot>
        <x-slot name="metaNewsKeywords">{{ $tag->meta_keywords }}</x-slot>
    @endisset

    @empty($tag->meta_description)
        <x-slot name="metaDes">{{ config('settings.description')}}</x-slot>
    @else 
        <x-slot name="metaDes">{{ $tag->meta_description }}</x-slot>
    @endempty

    <x-page-top-banners bannersGroup="banners-tag" />

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
