<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledConfig',
    'timestamp' => 1461341781,
    'checksum' => 'ea0d2811579e83d2a38666b8bca81411',
    'files' => [
        'user/config' => [
            'media' => [
                'file' => 'user/config/media.yaml',
                'modified' => 1461330888
            ],
            'plugins/external_links' => [
                'file' => 'user/config/plugins/external_links.yaml',
                'modified' => 1461339249
            ],
            'plugins/filesource' => [
                'file' => 'user/config/plugins/filesource.yaml',
                'modified' => 1461341172
            ],
            'plugins/ganalytics' => [
                'file' => 'user/config/plugins/ganalytics.yaml',
                'modified' => 1461330888
            ],
            'plugins/mathjax' => [
                'file' => 'user/config/plugins/mathjax.yaml',
                'modified' => 1461330888
            ],
            'plugins/page-inject' => [
                'file' => 'user/config/plugins/page-inject.yaml',
                'modified' => 1461340702
            ],
            'plugins/shortcodes' => [
                'file' => 'user/config/plugins/shortcodes.yaml',
                'modified' => 1461340982
            ],
            'plugins/toc' => [
                'file' => 'user/config/plugins/toc.yaml',
                'modified' => 1461340134
            ],
            'security' => [
                'file' => 'user/config/security.yaml',
                'modified' => 1461330888
            ],
            'site' => [
                'file' => 'user/config/site.yaml',
                'modified' => 1461330888
            ],
            'streams' => [
                'file' => 'user/config/streams.yaml',
                'modified' => 1461330888
            ],
            'system' => [
                'file' => 'user/config/system.yaml',
                'modified' => 1461341781
            ],
            'themes/learn2' => [
                'file' => 'user/config/themes/learn2.yaml',
                'modified' => 1461330888
            ]
        ],
        'system/config' => [
            'media' => [
                'file' => 'system/config/media.yaml',
                'modified' => 1461330887
            ],
            'site' => [
                'file' => 'system/config/site.yaml',
                'modified' => 1461330887
            ],
            'streams' => [
                'file' => 'system/config/streams.yaml',
                'modified' => 1461330887
            ],
            'system' => [
                'file' => 'system/config/system.yaml',
                'modified' => 1461330887
            ]
        ],
        'user/plugins' => [
            'plugins/admin' => [
                'file' => 'user/plugins/admin/admin.yaml',
                'modified' => 1461330888
            ],
            'plugins/assets' => [
                'file' => 'user/plugins/assets/assets.yaml',
                'modified' => 1461338438
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/email.yaml',
                'modified' => 1461330889
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/error.yaml',
                'modified' => 1461330889
            ],
            'plugins/external_links' => [
                'file' => 'user/plugins/external_links/external_links.yaml',
                'modified' => 1461338601
            ],
            'plugins/filesource' => [
                'file' => 'user/plugins/filesource/filesource.yaml',
                'modified' => 1457854238
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/form.yaml',
                'modified' => 1461330890
            ],
            'plugins/ganalytics' => [
                'file' => 'user/plugins/ganalytics/ganalytics.yaml',
                'modified' => 1461330890
            ],
            'plugins/gitter' => [
                'file' => 'user/plugins/gitter/gitter.yaml',
                'modified' => 1461339506
            ],
            'plugins/highlight' => [
                'file' => 'user/plugins/highlight/highlight.yaml',
                'modified' => 1461337939
            ],
            'plugins/langswitcher' => [
                'file' => 'user/plugins/langswitcher/langswitcher.yaml',
                'modified' => 1461330890
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/login.yaml',
                'modified' => 1461330890
            ],
            'plugins/markdown-color' => [
                'file' => 'user/plugins/markdown-color/markdown-color.yaml',
                'modified' => 1461330890
            ],
            'plugins/mathjax' => [
                'file' => 'user/plugins/mathjax/mathjax.yaml',
                'modified' => 1461330890
            ],
            'plugins/page-inject' => [
                'file' => 'user/plugins/page-inject/page-inject.yaml',
                'modified' => 1461340619
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/problems.yaml',
                'modified' => 1461330890
            ],
            'plugins/shortcodes' => [
                'file' => 'user/plugins/shortcodes/shortcodes.yaml',
                'modified' => 1461340916
            ],
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/simplesearch.yaml',
                'modified' => 1461330890
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/sitemap.yaml',
                'modified' => 1461338318
            ],
            'plugins/snappygrav' => [
                'file' => 'user/plugins/snappygrav/snappygrav.yaml',
                'modified' => 1461340602
            ],
            'plugins/toc' => [
                'file' => 'user/plugins/toc/toc.yaml',
                'modified' => 1461340022
            ]
        ]
    ],
    'data' => [
        'plugins' => [
            'admin' => [
                'enabled' => true,
                'route' => '/your-mama',
                'theme' => 'grav',
                'dashboard' => [
                    'days_of_stats' => 7
                ],
                'session' => [
                    'timeout' => 1800
                ],
                'warnings' => [
                    'delete_page' => true
                ],
                'edit_mode' => 'normal',
                'show_github_msg' => true,
                'google_fonts' => true,
                'enable_auto_updates_check' => true,
                'popularity' => [
                    'enabled' => true,
                    'ignore' => [
                        0 => '/test*',
                        1 => '/modular'
                    ],
                    'history' => [
                        'daily' => 30,
                        'monthly' => 12,
                        'visitors' => 20
                    ]
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'email' => [
                'enabled' => true,
                'from' => NULL,
                'from_name' => NULL,
                'to' => NULL,
                'to_name' => NULL,
                'mailer' => [
                    'engine' => 'mail',
                    'smtp' => [
                        'server' => 'localhost',
                        'port' => 25,
                        'encryption' => 'none',
                        'user' => '',
                        'password' => ''
                    ],
                    'sendmail' => [
                        'bin' => '/usr/sbin/sendmail'
                    ]
                ],
                'content_type' => 'text/html',
                'debug' => false
            ],
            'error' => [
                'enabled' => true,
                'routes' => [
                    404 => '/error'
                ]
            ],
            'external_links' => [
                'enabled' => true,
                'built_in_css' => true,
                'weight' => 0,
                'exclude' => [
                    'classes' => [
                        0 => 'exclude'
                    ],
                    'domains' => NULL
                ],
                'links' => [
                    'www' => false,
                    'schemes' => [
                        0 => 'http',
                        1 => 'https',
                        2 => 'ftp',
                        3 => 'irc',
                        4 => 'mailto',
                        5 => 'news',
                        6 => 'nntp',
                        7 => 'rtsp',
                        8 => 'sftp',
                        9 => 'ssh',
                        10 => 'tel',
                        11 => 'telnet',
                        12 => 'webcal'
                    ]
                ],
                'process' => true,
                'title' => false,
                'no_follow' => true,
                'target' => '_blank',
                'mode' => 'active'
            ],
            'filesource' => [
                'enabled' => true
            ],
            'form' => [
                'enabled' => true,
                'files' => [
                    'multiple' => false,
                    'destination' => '@self',
                    'accept' => [
                        0 => 'image/*'
                    ]
                ]
            ],
            'ganalytics' => [
                'enabled' => true,
                'trackingId' => ''
            ],
            'gitter' => [
                'enabled' => true,
                'enable_on_routes' => [
                    0 => '/'
                ],
                'disable_on_routes' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ]
            ],
            'highlight' => [
                'enabled' => true,
                'theme' => 'default'
            ],
            'langswitcher' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'login' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => false,
                'route_register' => false,
                'route_activate' => '/activate_user',
                'route_forgot' => '/forgot_password',
                'route_reset' => '/reset_password',
                'redirect' => NULL,
                'parent_acl' => false,
                'user_registration' => [
                    'enabled' => true,
                    'fields' => [
                        0 => 'username',
                        1 => 'password',
                        2 => 'email',
                        3 => 'fullname',
                        4 => 'title',
                        5 => 'access',
                        6 => 'state'
                    ],
                    'additional_params' => [
                        'access' => 'site.login'
                    ],
                    'options' => [
                        'validate_password1_and_password2' => true,
                        'set_user_disabled' => false,
                        'login_after_registration' => true,
                        'send_activation_email' => false,
                        'send_notification_email' => false,
                        'send_welcome_email' => false
                    ]
                ],
                'rememberme' => [
                    'enabled' => true,
                    'timeout' => 1800,
                    'name' => 'grav-rememberme'
                ],
                'oauth' => [
                    'enabled' => false,
                    'user' => [
                        'autocreate' => false,
                        'access' => [
                            'site' => [
                                'login' => true
                            ]
                        ]
                    ],
                    'providers' => [
                        'Facebook' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Google' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'GitHub' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ],
                        'Twitter' => [
                            'enabled' => false,
                            'credentials' => [
                                'key' => NULL,
                                'secret' => NULL
                            ]
                        ]
                    ]
                ]
            ],
            'markdown-color' => [
                'enabled' => true
            ],
            'mathjax' => [
                'enabled' => true,
                'built_in_css' => true,
                'built_in_js' => true,
                'weight' => -5,
                'CDN' => [
                    'enabled' => true,
                    'url' => 'https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'
                ],
                'process' => true
            ],
            'page-inject' => [
                'enabled' => true,
                'active' => true,
                'processed_content' => true
            ],
            'problems' => [
                'enabled' => true,
                'built_in_css' => true
            ],
            'shortcodes' => [
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
            ],
            'simplesearch' => [
                'enabled' => true,
                'built_in_css' => true,
                'route' => '/search',
                'template' => 'simplesearch_results',
                'filters' => [
                    'category' => 'blog'
                ],
                'filter_combinator' => 'and',
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ]
            ],
            'sitemap' => [
                'enabled' => true,
                'route' => '/sitemap',
                'ignores' => [
                    0 => '/blog/blog-post-to-ignore',
                    1 => '/ignore-this-route'
                ]
            ],
            'snappygrav' => [
                'enabled' => true,
                'built_in_css' => true,
                'wk_path' => 'vendor/h4cc/wkhtmltopdf-i386/bin/wkhtmltopdf-i386',
                'grayscale' => false,
                'margin_bottom' => 10,
                'margin_left' => 10,
                'margin_right' => 10,
                'margin_top' => 10,
                'orientation' => 'Portrait',
                'title' => true,
                'zoom' => 1
            ],
            'toc' => [
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
        ],
        'media' => [
            'defaults' => [
                'type' => 'file',
                'thumb' => 'media/thumb.png',
                'mime' => 'application/octet-stream',
                'image' => [
                    'filters' => [
                        'default' => [
                            0 => 'enableProgressive'
                        ]
                    ]
                ]
            ],
            'jpg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpe' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpg.png',
                'mime' => 'image/jpeg'
            ],
            'jpeg' => [
                'type' => 'image',
                'thumb' => 'media/thumb-jpeg.png',
                'mime' => 'image/jpeg'
            ],
            'png' => [
                'type' => 'image',
                'thumb' => 'media/thumb-png.png',
                'mime' => 'image/png'
            ],
            'gif' => [
                'type' => 'animated',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/gif'
            ],
            'svg' => [
                'type' => 'vector',
                'thumb' => 'media/thumb-gif.png',
                'mime' => 'image/svg+xml'
            ],
            'mp4' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mp4.png',
                'mime' => 'video/mp4'
            ],
            'mov' => [
                'type' => 'video',
                'thumb' => 'media/thumb-mov.png',
                'mime' => 'video/quicktime'
            ],
            'm4v' => [
                'type' => 'video',
                'thumb' => 'media/thumb-m4v.png',
                'mime' => 'video/x-m4v'
            ],
            'swf' => [
                'type' => 'video',
                'thumb' => 'media/thumb-swf.png',
                'mime' => 'video/x-flv'
            ],
            'flv' => [
                'type' => 'video',
                'thumb' => 'media/thumb-flv.png',
                'mime' => 'video/x-flv'
            ],
            'mp3' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-mp3.png',
                'mime' => 'audio/mp3'
            ],
            'ogg' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-ogg.png',
                'mime' => 'audio/ogg'
            ],
            'wma' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wma.png',
                'mime' => 'audio/wma'
            ],
            'm4a' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-m4a.png',
                'mime' => 'audio/m4a'
            ],
            'wav' => [
                'type' => 'audio',
                'thumb' => 'media/thumb-wav.png',
                'mime' => 'audio/wav'
            ],
            'aiff' => [
                'type' => 'audio',
                'mime' => 'audio/aiff'
            ],
            'aif' => [
                'type' => 'audio',
                'mime' => 'audio/aif'
            ],
            'txt' => [
                'type' => 'file',
                'thumb' => 'media/thumb-txt.png',
                'mime' => 'text/plain'
            ],
            'xml' => [
                'type' => 'file',
                'thumb' => 'media/thumb-xml.png',
                'mime' => 'application/xml'
            ],
            'doc' => [
                'type' => 'file',
                'thumb' => 'media/thumb-doc.png',
                'mime' => 'application/msword'
            ],
            'docx' => [
                'type' => 'file',
                'mime' => 'application/msword'
            ],
            'xls' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlm' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xld' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xla' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlc' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xlw' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'xll' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-excel'
            ],
            'ppt' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'pps' => [
                'type' => 'file',
                'mime' => 'application/vnd.ms-powerpoint'
            ],
            'rtf' => [
                'type' => 'file',
                'mime' => 'application/rtf'
            ],
            'bmp' => [
                'type' => 'file',
                'mime' => 'image/bmp'
            ],
            'tiff' => [
                'type' => 'file',
                'mime' => 'image/tiff'
            ],
            'mpeg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpg' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'mpe' => [
                'type' => 'file',
                'mime' => 'video/mpeg'
            ],
            'avi' => [
                'type' => 'file',
                'mime' => 'video/msvideo'
            ],
            'wmv' => [
                'type' => 'file',
                'mime' => 'video/x-ms-wmv'
            ],
            'html' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'htm' => [
                'type' => 'file',
                'thumb' => 'media/thumb-html.png',
                'mime' => 'text/html'
            ],
            'pdf' => [
                'type' => 'file',
                'thumb' => 'media/thumb-pdf.png',
                'mime' => 'application/pdf'
            ],
            'zip' => [
                'type' => 'file',
                'thumb' => 'media/thumb-zip.png',
                'mime' => 'application/zip'
            ],
            '7z' => [
                'type' => 'file',
                'thumb' => 'media/thumb-7zip.png',
                'mime' => 'application/x-7z-compressed'
            ],
            'gz' => [
                'type' => 'file',
                'thumb' => 'media/thumb-gz.png',
                'mime' => 'application/gzip'
            ],
            'tar' => [
                'type' => 'file',
                'mime' => 'application/x-tar'
            ],
            'css' => [
                'type' => 'file',
                'thumb' => 'media/thumb-css.png',
                'mime' => 'text/css'
            ],
            'js' => [
                'type' => 'file',
                'thumb' => 'media/thumb-js.png',
                'mime' => 'application/javascript'
            ],
            'json' => [
                'type' => 'file',
                'thumb' => 'media/thumb-json.png',
                'mime' => 'application/json'
            ]
        ],
        'site' => [
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
            'redirects' => NULL,
            'routes' => NULL,
            'blog' => [
                'route' => '/blog'
            ]
        ],
        'streams' => [
            'schemes' => [
                'image' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://images',
                        1 => 'system://images'
                    ]
                ],
                'page' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://pages'
                    ]
                ],
                'account' => [
                    'type' => 'ReadOnlyStream',
                    'paths' => [
                        0 => 'user://accounts'
                    ]
                ]
            ]
        ],
        'system' => [
            'absolute_urls' => false,
            'timezone' => 'Europe/London',
            'default_locale' => NULL,
            'param_sep' => ':',
            'wrapped_site' => false,
            'reverse_proxy_setup' => false,
            'proxy_url' => NULL,
            'languages' => [
                'supported' => [
                    0 => 'en',
                    1 => 'ja'
                ],
                'include_default_lang' => true,
                'translations' => true,
                'translations_fallback' => true,
                'session_store_active' => false,
                'http_accept_language' => false,
                'override_locale' => false
            ],
            'home' => [
                'alias' => '/home',
                'hide_in_urls' => false
            ],
            'pages' => [
                'theme' => 'learn2',
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ],
                'list' => [
                    'count' => 20
                ],
                'dateformat' => [
                    'default' => NULL,
                    'short' => 'jS M Y',
                    'long' => 'F jS \\a\\t g:ia'
                ],
                'publish_dates' => true,
                'process' => [
                    'markdown' => true,
                    'twig' => true
                ],
                'twig_first' => false,
                'events' => [
                    'page' => true,
                    'twig' => true
                ],
                'markdown' => [
                    'extra' => true,
                    'auto_line_breaks' => true,
                    'auto_url_links' => true,
                    'escape_markup' => true,
                    'special_chars' => [
                        '>' => 'gt',
                        '<' => 'lt'
                    ]
                ],
                'types' => [
                    0 => 'txt',
                    1 => 'xml',
                    2 => 'html',
                    3 => 'htm',
                    4 => 'json',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'append_url_extension' => '',
                'expires' => 604800,
                'last_modified' => false,
                'etag' => false,
                'vary_accept_encoding' => false,
                'redirect_default_route' => false,
                'redirect_default_code' => '301',
                'redirect_trailing_slash' => true,
                'ignore_files' => [
                    0 => '.DS_Store'
                ],
                'ignore_folders' => [
                    0 => '.git',
                    1 => '.idea'
                ],
                'ignore_hidden' => true,
                'url_taxonomy_filters' => true,
                'markdown_extra' => false
            ],
            'cache' => [
                'enabled' => true,
                'check' => [
                    'method' => 'file'
                ],
                'driver' => 'auto',
                'prefix' => 'g',
                'lifetime' => 604800,
                'gzip' => false
            ],
            'twig' => [
                'cache' => true,
                'debug' => true,
                'auto_reload' => true,
                'autoescape' => false,
                'undefined_functions' => true,
                'undefined_filters' => true,
                'umask_fix' => false
            ],
            'assets' => [
                'css_pipeline' => false,
                'css_minify' => true,
                'css_minify_windows' => false,
                'css_rewrite' => true,
                'js_pipeline' => false,
                'js_minify' => true,
                'enable_asset_timestamp' => false,
                'collections' => [
                    'jquery' => 'system://assets/jquery/jquery-2.x.min.js'
                ]
            ],
            'errors' => [
                'display' => true,
                'log' => true
            ],
            'debugger' => [
                'enabled' => false,
                'shutdown' => [
                    'close_connection' => true
                ],
                'twig' => true
            ],
            'images' => [
                'default_image_quality' => 85,
                'cache_all' => false,
                'cache_perms' => '0755',
                'debug' => false
            ],
            'media' => [
                'enable_media_timestamp' => false,
                'upload_limit' => 0,
                'unsupported_inline_types' => [
                    
                ],
                'allowed_fallback_types' => [
                    
                ]
            ],
            'session' => [
                'enabled' => true,
                'timeout' => 1800,
                'name' => 'grav-site',
                'secure' => false,
                'httponly' => true
            ]
        ],
        'security' => [
            'salt' => 'rhtZMbnCSamJ2s'
        ],
        'themes' => [
            'learn2' => [
                'enabled' => true,
                'top_level_version' => false,
                'github' => [
                    'position' => 'top',
                    'tree' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/blob/develop/',
                    'commits' => 'https://github.com/getgrav/grav-skeleton-rtfm-site/commits/develop/'
                ],
                'streams' => [
                    'schemes' => [
                        'theme' => [
                            'type' => 'ReadOnlyStream',
                            'paths' => [
                                0 => 'user/themes/learn2'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
