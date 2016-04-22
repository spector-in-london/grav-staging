<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/tomaszmatecki/Git/grav-staging/user/config/site.yaml',
    'modified' => 1461318238,
    'data' => [
        'title' => 'Milagro Documentation',
        'author' => [
            'name' => 'Apache Community',
            'email' => 'dev@milagro.incubator.apache.org'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Milagro Documentation Portal'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
