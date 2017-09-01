<?php
defined('TYPO3_MODE') || die();

$extbaseObjectContainer = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Extbase\Object\Container\Container::class);

$extbaseObjectContainer->registerImplementation('Tx_NreachT3Data_Controller_PluginController', \Nreach\T3Data\Controller\PluginController::class);

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
