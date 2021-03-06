<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/ganalytics/blueprints.yaml',
    'modified' => 1461330890,
    'data' => [
        'name' => 'Google Analytics',
        'version' => '1.0.0',
        'description' => 'Google Analytics plugin lets you easyly embed the GA tracking to the Grav website.',
        'icon' => 'google',
        'author' => [
            'name' => 'John Linhart',
            'email' => 'admin@escope.cz',
            'url' => 'http://johnlinhart.com'
        ],
        'homepage' => 'https://github.com/escopecz/grav-ganalytics',
        'keywords' => 'google, plugin, tracking, analytics',
        'bugs' => 'https://github.com/escopecz/grav-ganalytics/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Status',
                    'hightlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'trackingId' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Tracking ID',
                    'placeholder' => 'UA-...',
                    'help' => 'Google Analytics tracking ID. In format UA-00000000-0.'
                ]
            ]
        ]
    ]
];
