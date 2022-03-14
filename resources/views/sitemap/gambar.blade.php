<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  @foreach ($gambar as $a)
    <url>
      <loc>{{ url('/img/seo/' . basename($a)) }}</loc>
      <lastmod>2020-11-10T12:07:55+07:00</lastmod>
      <changefreq>weekly</changefreq>
      <priority>0.6</priority>
    </url>
  @endforeach
</urlset>