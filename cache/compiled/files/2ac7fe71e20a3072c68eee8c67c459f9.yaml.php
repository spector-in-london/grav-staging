<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://shortcodes/shortcodes.yaml',
    'modified' => 1461340916,
    'data' => [
        'enabled' => true,
        'shortcodes' => [
            'assets' => [
                'enabled' => true,
                'options' => [
                    'type' => 'css',
                    'inline' => false,
                    'priority' => 10,
                    'pipeline' => false,
                    'load' => ''
                ]
            ],
            'comment' => [
                'enabled' => true
            ],
            'embed' => [
                'enabled' => true,
                'options' => [
                    'template' => ''
                ]
            ],
            'markdown' => [
                'enabled' => true,
                'options' => [
                    'extra' => true
                ]
            ],
            'summary' => [
                'enabled' => true
            ],
            'twig' => [
                'enabled' => true
            ]
        ]
    ]
];
