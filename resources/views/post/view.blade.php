{{-- ------- page: views.post.view ---------- --}}

<x-layouts.app>

    <x-slot name="pageTitle">
        {{ config('settings.ten-thuong-hieu') . ' | ' . $post ? $post->title : 'Bài đăng' }}
    </x-slot>

    @if($post)

    <div class="post-wrap container mx-auto">

        <article class="post-container">

            <x-breadcrumbs blog="true" current="bai dang hien tai" />

            <header class="post-header">

                <!-- Ảnh bìa bài đăng -->
                <div class="post-thumbnail">
                    <img src="{{ asset($post->cover->url()) }}" alt="">
                </div>

                <!-- Tiêu đề bài đang -->
                <div class="post-title">
                    <h2>{{ $post->title }}</h2>
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
                        <a>
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
                    @foreach ($post->anchor_link as $item)
                    <a href="{{ $item['anchor_id'] }}">
                        <x-orchid-icon path="link" /> {{ $item['anchor_name'] }}
                    </a>
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
                    Bài đăng trước
                </a>
                @else

                Đang ở bài viết đầu tiên

                @endisset

                @isset($nextPost)
                <a href="{{ route('blog.post.view', $nextPost) }}" class="next-post">
                    Bài đăng mới hơn
                    <x-orchid-icon path="arrow-right" />
                </a>
                @else
                Đang ở bài viết mới nhất
                @endisset

            </footer>


        </article>

        <x-post-right-side />

    </div>

    @endif

    <div class="post-related container mx-auto">
        <x-widget.featured-widget widgetTitle="Bài đăng tương tự" :currentPost="$post->id" :posts="$posts" class="widget-margin-top" />
    </div>

</x-layouts.app>
