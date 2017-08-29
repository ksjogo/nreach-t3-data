<?php
if (!defined('TYPO3_MODE'))
	die('Access denied.');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Nreach.t3_data',
        'tools',
        'entities',
        '',
        array(
            'Entities' => 'index',
        ),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/entities.svg',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_entities.xlf',
        )
    );
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'Plugin',
    'Nreach Entity Block'
);
