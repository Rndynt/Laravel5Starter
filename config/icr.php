<?php

return [
    'image_adapter' => 'gd',
    'uploads_path' => '/uploads/images',

    'default' => [
        'small' => [
            'width' => 100,
            'height' => 100,
            'operation' => 'resize',
        ],
        'medium' => [
            'width' => 300,
            'height' => 300,
            'operation' => 'resize',
        ],
        'large' => [
            'width' => 600,
            'height' => 600,
            'operation' => 'resize',
        ]
    ],
    'avatar' => [
        'small' => [
            'width' => 24,
            'height' => 24,
            'operation' => 'resize-crop',
        ],
        'medium' => [
            'width' => 200,
            'height' => 200,
            'operation' => 'resize-crop',
        ],
        'large' => [
            'width' => 400,
            'height' => 400,
            'operation' => 'resize crop',
        ],
    ],
];

