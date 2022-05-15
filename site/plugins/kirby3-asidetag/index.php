<?php

Kirby::plugin('zylai/asidetag', [
    'tags' => [
        'aside' => [
            'html' => function($tag) {
                return "<aside><p>$tag->value</p></aside>";
            }
        ]
    ]
]);
