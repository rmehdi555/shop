<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('web.home') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    <url>
        <loc>{{ route('web.show.about_us') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
    @if($productCategories != null)
        @foreach($productCategories as $item)
            <url>
                <loc>{{ route('web.show.category',$item->slug) }}</loc>
                <lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            </url>
        @endforeach
    @endif
    @if($products != null)
        @foreach($products as $product)
            <url>
                <loc>{{ route('web.show.product',$product->slug) }}</loc>
                <lastmod>{{ $product->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            </url>
        @endforeach
    @endif
    {{--@if($news != null)--}}
    {{--@foreach($news as $item)--}}
    {{--<url>--}}
    {{--<loc>{{ route('web.show.news',$item->slug) }}</loc>--}}
    {{--<lastmod>{{ $item->updated_at->tz('UTC')->toAtomString() }}</lastmod>--}}
    {{--</url>--}}
    {{--@endforeach--}}
    {{--@endif--}}
    <url>
        <loc>{{ route('web.contact.us.index') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
    </url>
</urlset>
