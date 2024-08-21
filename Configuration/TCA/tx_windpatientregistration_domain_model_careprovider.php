<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider',
        'label' => 'title',
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
        'searchFields' => 'title,website,street,house_number_addition,zip,email,email_administration,longitude,latitude',
        'iconfile' => 'EXT:wind_patient_registration/Resources/Public/Icons/tx_windpatientregistration_domain_model_careprovider.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'title, website, street, house_number, house_number_addition, zip, email, email_administration, longitude, latitude, status, credit, type, info_system, service_area, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_windpatientregistration_domain_model_careprovider',
                'foreign_table_where' => 'AND {#tx_windpatientregistration_domain_model_careprovider}.{#pid}=###CURRENT_PID### AND {#tx_windpatientregistration_domain_model_careprovider}.{#sys_language_uid} IN (-1,0)',
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

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.title',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.title.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'website' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.website',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.website.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.street',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.street.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'house_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.house_number',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.house_number.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'house_number_addition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.house_number_addition',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.house_number_addition.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.zip',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.zip.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.email',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.email.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'email_administration' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.email_administration',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.email_administration.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'longitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.longitude',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.longitude.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'latitude' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.latitude',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.latitude.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.status',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.status.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'credit' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.credit',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.credit.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.type',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.type.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_windpatientregistration_domain_model_caretype',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'info_system' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.info_system',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.info_system.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_windpatientregistration_domain_model_informationsystem',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'service_area' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.service_area',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_careprovider.service_area.description',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_windpatientregistration_domain_model_servicearea',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
