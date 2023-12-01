<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
    <url>
        <loc>{{ route('blog.post.view', $post) }}</loc>
        <lastmod>{{ $post->created_at->tz('Asia/Ho_Chi_Minh')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
</urlset>
