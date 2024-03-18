<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
    </url>
    <url>
        <loc>{{ route('blog.index') }}</loc>
    </url>
    @foreach ($topics as $topic)
    <url>
        <loc>{{ route('blog.topic.posts', $topic) }}</loc>
    </url>
    @endforeach
    @foreach ($tags as $tag)
    <url>
        <loc>{{ route('blog.tag.posts', $tag) }}</loc>
    </url>
    @endforeach
    <url>
        <loc>{{ route('about') }}</loc>
    </url>
</urlset>
