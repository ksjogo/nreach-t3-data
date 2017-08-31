<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    $_EXTKEY,
    'Plugin',
    array('Plugin' => 'index')
);

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'nreach_data_entity_formdata',
    'class' => \Nreach\T3Data\Form\Element\EntityFormdata::class,
    'priority' => 50,
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][] = [
    'nodeName' => 'nreach_data_entity_jsonld',
    'class' => \Nreach\T3Data\Form\Element\EntityJsonld::class,
    'priority' => 50,
];
