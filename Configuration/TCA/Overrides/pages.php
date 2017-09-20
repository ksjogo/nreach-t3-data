<?php
defined('TYPO3_MODE') or die();

$newColumns = [
    'tx_t3data_entities' => [
        'label' => 'Nreach',
        'config' => [
            'type' => 'flex',
            'ds' => [
                'default' => 'FILE:EXT:nreach_t3_data/Configuration/FlexForms/plugins.xml'
            ]
        ]
    ]
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $newColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'tx_t3data_entities', '', 'after:description');
