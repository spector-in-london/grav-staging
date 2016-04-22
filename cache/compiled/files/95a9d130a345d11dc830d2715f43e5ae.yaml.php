<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/filesource/blueprints.yaml',
    'modified' => 1457854238,
    'data' => [
        'name' => 'Filesource',
        'version' => 0.200000000000000011102230246251565404236316680908203125,
        'description' => 'With **filesource** a user can show the source of any text file in a post',
        'icon' => 'trello',
        'author' => [
            'name' => 'anza',
            'email' => 'antti@may.fi',
            'url' => 'http://notes.may.fi'
        ],
        'homepage' => 'https://github.com/anza/grav-plugin-filesource',
        'keywords' => 'text file, source, embed',
        'bugs' => 'https://github.com/anza/grav-plugin-filesource/issues',
        'license' => 'BSD',
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
