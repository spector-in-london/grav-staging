<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/brianspector/Library/Mobile Documents/com~apple~CloudDocs/Documents/GitHub/grav-staging/user/plugins/mathjax/languages.yaml',
    'modified' => 1461252309,
    'data' => [
        'de' => [
            'PLUGINS' => [
                'MATHJAX' => [
                    'GLOBAL_CONFIG' => 'Globale Einstellungen',
                    'DEFAULT_CONFIG' => 'Standardeinstellungen für External Links',
                    'SPECIFIC_CONFIG' => 'Globale und seitenspezifische Einstellungen',
                    'MATHJAX' => 'MathJax',
                    'PLUGIN_STATUS' => 'Plugin Status',
                    'BUILTIN_CSS' => 'Verwende mitgeliefertes CSS',
                    'BUILTIN_JS' => 'Verwende mitgeliefertes JS',
                    'WEIGHT' => 'Ausführungsreihenfolge',
                    'WEIGHT_HELP' => 'Setze negative Werte um MathJax direkt nach *SmartyPants* ausführen zu lassen.',
                    'CDN' => [
                        'ENABLED' => 'Verwende das MathJax Content Delivery Network (CDN)',
                        'ENABLED_HELP' => 'Aktivierung dieser Option bewrikt das Laden von MathJax über den MathJax Server (empfohlen) or von dem unten stehenden Link.',
                        'URL' => 'MathJax CDN URL',
                        'URL_HELP' => 'Gebe hier die MathJax CDN URL ein oder lasse es frei um MathJax direkt von wwww.mathjax.org zu laden.'
                    ],
                    'PROCESS' => 'Aktiviere <code>MathJax</code> auf Seite'
                ]
            ]
        ],
        'en' => [
            'PLUGINS' => [
                'MATHJAX' => [
                    'GLOBAL_CONFIG' => 'Global plugin configurations',
                    'DEFAULT_CONFIG' => 'Default values for External Links configuration',
                    'SPECIFIC_CONFIG' => 'Global and page specific configurations',
                    'MATHJAX' => 'MathJax',
                    'PLUGIN_STATUS' => 'Plugin status',
                    'BUILTIN_CSS' => 'Use built in CSS',
                    'BUILTIN_JS' => 'Use built in JS',
                    'WEIGHT' => 'Order of execution',
                    'WEIGHT_HELP' => 'To process the page contents right after *SmartyPants* use negative values.',
                    'CDN' => [
                        'ENABLED' => 'Use MathJax Content Delivery Network (CDN)',
                        'ENABLED_HELP' => 'Check this box to load MathJax source from MathJax servers (recommended) or from the link you can provide below.',
                        'URL' => 'MathJax CDN URL',
                        'URL_HELP' => 'Enter the Mathjax CDN URL here or leave it unchanged to use the one provided by wwww.mathjax.org'
                    ],
                    'PROCESS' => 'Activate <code>MathJax</code> filter on the page'
                ]
            ]
        ]
    ]
];
