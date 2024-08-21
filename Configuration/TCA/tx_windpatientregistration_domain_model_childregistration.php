<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration',
        'label' => 'bsn',
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
        'searchFields' => 'bsn,guardian_name,guardian_email',
        'iconfile' => 'EXT:wind_patient_registration/Resources/Public/Icons/tx_windpatientregistration_domain_model_childregistration.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'bsn, birthday, permission_required, guardian_name, guardian_email, status, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_windpatientregistration_domain_model_childregistration',
                'foreign_table_where' => 'AND {#tx_windpatientregistration_domain_model_childregistration}.{#pid}=###CURRENT_PID### AND {#tx_windpatientregistration_domain_model_childregistration}.{#sys_language_uid} IN (-1,0)',
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

        'bsn' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.bsn',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.bsn.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'birthday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.birthday',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.birthday.description',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'permission_required' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.permission_required',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.permission_required.description',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                    ]
                ],
                'default' => 0,
            ]
        ],
        'guardian_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.guardian_name',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.guardian_name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'guardian_email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.guardian_email',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.guardian_email.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.status',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_childregistration.status.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
    
    ],
];
