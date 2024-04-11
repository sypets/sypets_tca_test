<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

$tempColumns = [
    'tx_sypets_tca_test_check' => [
        'exclude' => 1,
        'label' => 'Checkbox with allowLanguageSynchronization',
        'config' => [
            'type' => 'check',
            'default' => 0,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ]
        ]
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'tx_sypets_tca_test_check'
);
