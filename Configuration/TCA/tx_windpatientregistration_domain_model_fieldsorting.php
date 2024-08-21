<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting',
        'label' => 'field',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'field,options',
        'iconfile' => 'EXT:wind_patient_registration/Resources/Public/Icons/tx_windpatientregistration_domain_model_fieldsorting.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'field, field_sorting, options, healthcare_provider, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_windpatientregistration_domain_model_fieldsorting',
                'foreign_table_where' => 'AND {#tx_windpatientregistration_domain_model_fieldsorting}.{#pid}=###CURRENT_PID### AND {#tx_windpatientregistration_domain_model_fieldsorting}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'field' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.field',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.field.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'field_sorting' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.field_sorting',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.field_sorting.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'options' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.options',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.options.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'healthcare_provider' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.healthcare_provider',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_fieldsorting.healthcare_provider.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_windpatientregistration_domain_model_careprovider',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
