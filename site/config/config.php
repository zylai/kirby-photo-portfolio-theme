<?php
return [
  'home' => 'portfolio',
  'debug' => false,
  'panel' => true,
  'thumbs' => [
    'srcsets' => [
      'default' => []
    ]
  ],
  'cache' => [
    'pages' => [
        'active' => true,
        'ignore' => function ($page) {
          return $page->title()->value() === 'Do not cache me';
        }
    ]
  ],
  'routes' => [
    [
      'pattern' => 'sitemap.xml',
      'action'  => function() {
        $pages = site()->pages()->index();

          // fetch the pages to ignore from the config settings,
          // if nothing is set, we ignore the error page
        $ignore = kirby()->option('sitemap.ignore', ['error']);

        $content = snippet('sitemap', compact('pages', 'ignore'), true);

          // return response with correct header type
        return new Kirby\Cms\Response($content, 'application/xml');
      }
    ],
    [
      'pattern' => 'sitemap',
      'action'  => function() {
        return go('sitemap.xml', 301);
      }
    ]
  ]
];
