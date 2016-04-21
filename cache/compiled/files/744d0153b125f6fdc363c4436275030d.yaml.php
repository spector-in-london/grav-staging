<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/mathjax/blueprints/mathjax.yaml',
    'modified' => 1461252309,
    'data' => [
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'options' => [
                            'type' => 'tab',
                            'fields' => [
                                'mathjax' => [
                                    'type' => 'section',
                                    'title' => 'PLUGINS.MATHJAX.MATHJAX',
                                    'underline' => true,
                                    'fields' => [
                                        'header.mathjax.process' => [
                                            'type' => 'toggle',
                                            'label' => 'PLUGINS.MATHJAX.PROCESS',
                                            'highlight' => 1,
                                            '@config-default' => 'plugins.mathjax.process',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
