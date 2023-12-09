{{-- ------- page: views.post.view ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . $post->title }}
    </x-slot>

    <x-slot name="metaDes">{{ $post->meta_description }}</x-slot>

    <x-slot name="metaImg">{{ $post->cover->url }}</x-slot>

    @if($post)

    <div class="post-wrap container mx-auto">

        <article class="post-container">

            <x-breadcrumbs blog="true" :current="$post->title" />

            <header class="post-header">

                <!-- Ảnh bìa bài đăng -->
                <div class="post-thumbnail">
                    <img src="{{ asset($post->cover->url()) }}" alt="">
                </div>

                <!-- Tiêu đề bài đang -->
                <div id="{{ $post->slug }}" class="post-title">
                    <h1>{{ $post->title }}</h1>
                </div>

                <!-- Thông tin vầ bài đăng -->
                <div class="post-top-bar">

                    <div class="post-user">
                        <x-orchid-icon path="bs.person-circle" />
                        {{ $post->user->name ?? '' }}
                    </div>

                    <ul class="post-category">
                        <x-orchid-icon path="collection" />
                        @foreach ($post->topics as $topic)
                        <a href="{{ route('blog.topic.posts', $topic) }}">
                            <li>{{ $topic->name }}</li>
                        </a>
                        @endforeach
                    </ul>

                    <p class="post-published-at"> <x-orchid-icon path="calendar" /> {{ $post->publishedAt() ?? '' }}
                    </p>

                </div>

            </header>

            <main class="post-main">

                <!-- Anchor link -->
                @isset($post->anchor_link)
                <div class="post-anchor-link">
                    <h2 class="post-anchor-link-title">Nội dung chính:</h2>
                    @foreach ($post->anchor_link as $item)
                    <a href="{{ $item['anchor_id'] }}"> {{ $item['anchor_name'] }} </a>
                    @endforeach
                </div>
                @endif

                <!-- Post content -->
                <div class="post-content">
                    {!! $post->markdownToHtml() !!}
                </div>

            </main>

            <footer class="post-footer">

                @isset($prevPost)
                <a href="{{ route('blog.post.view', $prevPost) }}" class="prev-post">
                    <x-orchid-icon path="arrow-left" />
                    Cũ hơn
                </a>
                @else
                Cũ nhất
                @endisset

                @isset($nextPost)
                <a href="{{ route('blog.post.view', $nextPost) }}" class="next-post">
                    Mới hơn
                    <x-orchid-icon path="arrow-right" />
                </a>
                @else
                Mới nhất
                @endisset

            </footer>

            <!-- {{-- Related Post --}}-->
            <div class="post-related container mx-auto">

                @if(request()->routeIs('blog.collection'))
                <h2 class="widget-title-1"> {{ __('Cùng bộ sưu tập') }} </h2>
                @else
                <h2 class="widget-title-1"> {{ __('Cùng chuyên mục') }} </h2>
                @endif

                <div class="post-list-container">

                    <div class="post-list">

                        @foreach ($posts as $post)

                        <x-post-card class="post-card" :post="$post" postDes="false" />

                        @endforeach
                    </div>

                </div>
            </div>

        </article>

        <x-post-right-side />

    </div>

    @endif

</x-layouts.app>
