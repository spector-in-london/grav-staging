<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://toc/toc.yaml',
    'modified' => 1461340022,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'title' => true,
        'anchorlink' => true,
        'permalink' => true,
        'placement' => 'left',
        'visible' => 'hover',
        'icon' => NULL,
        'class' => NULL,
        'baselevel' => 1,
        'headinglevel' => 6,
        'slug' => [
            'truncate' => true,
            'length' => 32,
            'break' => '-',
            'pad' => '-...'
        ],
        'process' => true
    ]
];
