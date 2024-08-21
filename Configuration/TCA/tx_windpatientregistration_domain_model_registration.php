<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration',
        'label' => 'identifier',
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
        'searchFields' => 'identifier,bsn,name,first_name,initials,prefix,last_name,birth_place,gender,street,house_number,house_number_addition,zip,city,phone,phone2,phone3,phone4,phone5,email',
        'iconfile' => 'EXT:wind_patient_registration/Resources/Public/Icons/tx_windpatientregistration_domain_model_registration.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'identifier, bsn, name, first_name, initials, prefix, last_name, birthday, birth_place, gender, street, house_number, house_number_addition, zip, city, verified, phone, phone2, phone3, phone4, phone5, email, status, healthcare_provider, children, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource, --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime'],
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
                'foreign_table' => 'tx_windpatientregistration_domain_model_registration',
                'foreign_table_where' => 'AND {#tx_windpatientregistration_domain_model_registration}.{#pid}=###CURRENT_PID### AND {#tx_windpatientregistration_domain_model_registration}.{#sys_language_uid} IN (-1,0)',
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

        'identifier' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.identifier',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.identifier.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'bsn' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.bsn',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.bsn.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.name',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'first_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.first_name',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.first_name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'initials' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.initials',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.initials.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'prefix' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.prefix',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.prefix.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'last_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.last_name',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.last_name.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'birthday' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.birthday',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.birthday.description',
            'config' => [
                'dbType' => 'date',
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 7,
                'eval' => 'date',
                'default' => null,
            ],
        ],
        'birth_place' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.birth_place',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.birth_place.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'gender' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.gender',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.gender.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'street' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.street',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.street.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'house_number' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.house_number',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.house_number.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'house_number_addition' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.house_number_addition',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.house_number_addition.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'zip' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.zip',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.zip.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'city' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.city',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.city.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'verified' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.verified',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.verified.description',
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
        'phone' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'phone2' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone2',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone2.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'phone3' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone3',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone3.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'phone4' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone4',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone4.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'phone5' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone5',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.phone5.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.email',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.email.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email',
                'default' => ''
            ]
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.status',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.status.description',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'healthcare_provider' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.healthcare_provider',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.healthcare_provider.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_windpatientregistration_domain_model_careprovider',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
        'children' => [
            'exclude' => true,
            'label' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.children',
            'description' => 'LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_windpatientregistration_domain_model_registration.children.description',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_windpatientregistration_domain_model_childregistration',
                'default' => 0,
                'minitems' => 0,
                'maxitems' => 1,
            ],

        ],
    
    ],
];
