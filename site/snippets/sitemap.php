<?= '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $page): ?>
        <?php if (in_array($page->uri(), $ignore)) continue ?>
        <url>
            <loc><?= html($page->url()) ?></loc>
            <lastmod><?= $page->modified('c', 'date') ?></lastmod>
            <?php
                if ($page->isHomePage()) {
                    $priority = 1;
                }
                elseif ($page->template() == 'portfolio-list' || $page->template() == 'portfolio') {
                    $priority = 0.8;
                }
                elseif ($page->template() == 'post-list' || $page->template() == 'post') {
                    $priority = 0.6;
                }
                else {
                    $priority = 0.4;
                }
            ?>
            <priority><?= $priority ?></priority>
        </url>
    <?php endforeach ?>
</urlset>
