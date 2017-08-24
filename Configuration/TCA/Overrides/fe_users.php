<?php
defined('TYPO3_MODE') || die();

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
    if (file_exists($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile'])) {
        require_once($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile']);
    }
    // no type field defined, so we define it here. This will only happen the first time the extension is installed!!
    $GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
    $tempColumnstx_puespalten_fe_users = [];
    $tempColumnstx_puespalten_fe_users[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = [
        'exclude' => true,
        'label'   => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten.tx_extbase_type',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                ['NewSpalteFeUsers','Tx_PueSpalten_NewSpalteFeUsers']
            ],
            'default' => 'Tx_PueSpalten_NewSpalteFeUsers',
            'size' => 1,
            'maxitems' => 1,
        ]
    ];
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumnstx_puespalten_fe_users);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    $GLOBALS['TCA']['fe_users']['ctrl']['type'],
    '',
    'after:' . $GLOBALS['TCA']['fe_users']['ctrl']['label']
);

$tmp_pue_spalten_columns = [

    'puespaltenaddredpub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltenaddredpub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltencontactmailpub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltencontactmailpub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltencontacttelpub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltencontacttelpub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltenlinkpub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltenlinkpub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltendocpdf' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltendocpdf',
        'config' => [
		    'type' => 'input',
		    'size' => 30,
		    'eval' => 'trim'
		],
    ],
    'puespaltendocpdfpub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltendocpdfpub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltenhandy' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltenhandy',
        'config' => [
		    'type' => 'input',
		    'size' => 30,
		    'eval' => 'trim'
		],
    ],
    'puespaltenhandypub' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltenhandypub',
        'config' => [
		    'type' => 'check',
		    'items' => [
		        '1' => [
		            '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
		        ]
		    ],
		    'default' => 0
		]
    ],
    'puespaltengrptxt' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltengrptxt',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectSingle',
		    'foreign_table' => 'tx_puespalten_domain_model_grpforadr',
		    'minitems' => 0,
		    'maxitems' => 1,
		],
    ],
    'puespaltenlangtxt' => [
        'exclude' => false,
        'label' => 'LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers.puespaltenlangtxt',
        'config' => [
		    'type' => 'select',
		    'renderType' => 'selectSingle',
		    'foreign_table' => 'tx_puespalten_domain_model_language',
		    'minitems' => 0,
		    'maxitems' => 1,
		],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_pue_spalten_columns);

/* inherit and extend the show items from the parent class */

if (isset($GLOBALS['TCA']['fe_users']['types']['0']['showitem'])) {
    $GLOBALS['TCA']['fe_users']['types']['Tx_PueSpalten_NewSpalteFeUsers']['showitem'] = $GLOBALS['TCA']['fe_users']['types']['0']['showitem'];
} elseif(is_array($GLOBALS['TCA']['fe_users']['types'])) {
    // use first entry in types array
    $fe_users_type_definition = reset($GLOBALS['TCA']['fe_users']['types']);
    $GLOBALS['TCA']['fe_users']['types']['Tx_PueSpalten_NewSpalteFeUsers']['showitem'] = $fe_users_type_definition['showitem'];
} else {
    $GLOBALS['TCA']['fe_users']['types']['Tx_PueSpalten_NewSpalteFeUsers']['showitem'] = '';
}
$GLOBALS['TCA']['fe_users']['types']['Tx_PueSpalten_NewSpalteFeUsers']['showitem'] .= ',--div--;LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:tx_puespalten_domain_model_newspaltefeusers,';
$GLOBALS['TCA']['fe_users']['types']['Tx_PueSpalten_NewSpalteFeUsers']['showitem'] .= 'puespaltenaddredpub, puespaltencontactmailpub, puespaltencontacttelpub, puespaltenlinkpub, puespaltendocpdf, puespaltendocpdfpub, puespaltenhandy, puespaltenhandypub, puespaltengrptxt, puespaltenlangtxt';

$GLOBALS['TCA']['fe_users']['columns'][$GLOBALS['TCA']['fe_users']['ctrl']['type']]['config']['items'][] = ['LLL:EXT:pue_spalten/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_PueSpalten_NewSpalteFeUsers','Tx_PueSpalten_NewSpalteFeUsers'];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    '',
    'EXT:/Resources/Private/Language/locallang_csh_.xlf'
);
