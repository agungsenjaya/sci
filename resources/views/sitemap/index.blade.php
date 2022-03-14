<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
  <sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
      <loc>{{ url('sitemap/products') }}</loc>
      <lastmod>{{ $post->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/categories') }}</loc>
      <lastmod>{{ $kategori->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/brands') }}</loc>
      <lastmod>{{ $brands->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/blog') }}</loc>
      <lastmod>{{ $artikel->created_at->toAtomString() }}</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('sitemap/seo') }}</loc>
      <lastmod>2020-11-10T12:07:55+07:00</lastmod>
    </sitemap>
    <sitemap>
      <loc>{{ url('') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('blog') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('contact') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('market') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('about') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('products') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('data-teknis') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('service') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('paint-calculator') }}</loc>
    </sitemap>
    <sitemap>
      <loc>{{ url('brosur') }}</loc>
    </sitemap>
  </sitemapindex>