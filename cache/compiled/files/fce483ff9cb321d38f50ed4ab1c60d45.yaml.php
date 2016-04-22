<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'plugins://mathjax/mathjax.yaml',
    'modified' => 1461330890,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'built_in_js' => true,
        'weight' => -5,
        'CDN' => [
            'enabled' => true,
            'url' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'
        ],
        'process' => true
    ]
];
