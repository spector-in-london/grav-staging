<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/assets/blueprints.yaml',
    'modified' => 1461338438,
    'data' => [
        'name' => 'Assets',
        'version' => '1.2.1',
        'description' => 'This plugin provides a convenient way to add CSS and JS assets directly from your pages.',
        'icon' => 'list-alt',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-assets',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'assets, javascript, css, inline',
        'bugs' => 'https://github.com/getgrav/grav-plugin-assets/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
