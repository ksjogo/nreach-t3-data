<?php
defined('TYPO3_MODE') or die();

$ll = 'LLL:EXT:nreach_t3_data/Resources/Private/Language/locallang_db.xlf:';

return [
    'ctrl' => [
        'title' => 'Nreach Entities',
        'label' => 'title'
    ],
    'columns' => [
        'title' => [
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim, required'
            ]
        ],
        'formdata' => [
            'label' => 'Formdata',
            'config' => [
                'exclude' => 0,
                'type' => 'text',
                'fieldControl' => [
                    'nreach' => [
                        'renderType' => 'nreach_data_entity_formdata',
                    ]
                ]
            ]
        ],
        'jsonld' => [
            'label' => 'JSON LD',
            'config' => [
                'exclude' => 0,
                'type' => 'text',
                'fieldControl' => [
                    'nreach' => [
                        'renderType' => 'nreach_data_entity_jsonld'
                    ]
				]
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'title, formdata, jsonld']
    ]
];
