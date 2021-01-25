<?php

/**
 * Extension Manager/Repository config file for ext "t3v9_test_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3v9 Test Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            '\\T3v9TestSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Jan Greth',
    'author_email' => 'jan@greth.me',
    'author_company' => '---',
    'version' => '1.0.0',
];
