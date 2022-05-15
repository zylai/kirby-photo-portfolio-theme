<?php
$options = [
    'title'       => 'Latest photos',
    'description' => 'Latest posts from the photoblog section of my website',
    'link'        => 'photoblog'
];
echo page('photoblog')->children()->listed()->flip()->limit(15)->feed($options);
