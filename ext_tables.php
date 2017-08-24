<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Pue neue Spalte-Extension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_puespalten_domain_model_language', 'EXT:pue_spalten/Resources/Private/Language/locallang_csh_tx_puespalten_domain_model_language.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_puespalten_domain_model_language');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_puespalten_domain_model_grpforadr', 'EXT:pue_spalten/Resources/Private/Language/locallang_csh_tx_puespalten_domain_model_grpforadr.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_puespalten_domain_model_grpforadr');

    },
    $_EXTKEY
);
