<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ route('web.home') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </sitemap>
    <sitemap>
        <loc>{{ route('web.HomeController.show.all.milegerd') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </sitemap>
    <sitemap>
        <loc>https://assen.ir/show/page/1</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </sitemap>
    @if($products != null)
        @foreach($products as $product)
            <sitemap>
                <loc>{{ route('web.show.product',$product->slug) }}</loc>
                <lastmod>{{ $product->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.9</priority>
            </sitemap>
        @endforeach
    @endif
    @if($news != null)
        @foreach($news as $item)
            <sitemap>
                <loc>{{ route('web.show.news',$item->slug) }}</loc>
                <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.8</priority>
            </sitemap>
        @endforeach
    @endif
    @if($productCategories != null)
        @foreach($productCategories as $item)
            <sitemap>
                <loc>{{ route('web.show.category',$item->slug) }}</loc>
                <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.7</priority>
            </sitemap>
        @endforeach
    @endif
    <sitemap>
        <loc>{{ route('web.contact.us.index') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </sitemap>
</sitemapindex>