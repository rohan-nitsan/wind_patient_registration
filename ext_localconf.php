<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'WindPatientRegistration',
        'Pi1',
        [
            \WIND\WindPatientRegistration\Controller\PatientController::class => 'list'
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    pi1 {
                        iconIdentifier = wind_patient_registration-plugin-pi1
                        title = LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_wind_patient_registration_pi1.name
                        description = LLL:EXT:wind_patient_registration/Resources/Private/Language/locallang_db.xlf:tx_wind_patient_registration_pi1.description
                        tt_content_defValues {
                            CType = list
                            list_type = windpatientregistration_pi1
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
