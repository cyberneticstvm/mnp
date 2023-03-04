<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://mnprental.com</loc>
        <lastmod>{{ Carbon\Carbon::yesterday()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
    <url>
        <loc>https://mnprental.com/about</loc>
        <lastmod>{{ Carbon\Carbon::yesterday()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
    <url>
        <loc>https://mnprental.com/service</loc>
        <lastmod>{{ Carbon\Carbon::yesterday()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
    <url>
        <loc>https://mnprental.com/contact</loc>
        <lastmod>{{ Carbon\Carbon::yesterday()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.1</priority>
    </url>
</urlset>