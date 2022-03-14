<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($brands as $brands)
    <url>
      <loc>{{ url('/brands/' . $brands->slug) }}</loc>
      <lastmod>{{ $brands->created_at->toAtomString() }}</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.6</priority>
    </url>
  @endforeach
</urlset>