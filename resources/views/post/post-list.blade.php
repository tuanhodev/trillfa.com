{{-- ------- page: views.post.topic-post-list ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle"> {{ config('settings.ten-thuong-hieu') . ' | ' . 'Blog Post' }} </x-slot>

    <x-page-top-banners bannersGroup="banners-blog" />

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
