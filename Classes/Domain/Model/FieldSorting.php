<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Domain\Model;


/**
 * This file is part of the "PatientRegistration" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 
 */

/**
 * FieldSorting
 */
class FieldSorting extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * field
     *
     * @var string
     */
    protected $field = '';

    /**
     * fieldSorting
     *
     * @var int
     */
    protected $fieldSorting = 0;

    /**
     * options
     *
     * @var string
     */
    protected $options = '';

    /**
     * healthcareProvider
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\CareProvider
     */
    protected $healthcareProvider = null;

    /**
     * Returns the field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets the field
     *
     * @param string $field
     * @return void
     */
    public function setField(string $field)
    {
        $this->field = $field;
    }

    /**
     * Returns the fieldSorting
     *
     * @return int
     */
    public function getFieldSorting()
    {
        return $this->fieldSorting;
    }

    /**
     * Sets the fieldSorting
     *
     * @param int $fieldSorting
     * @return void
     */
    public function setFieldSorting(int $fieldSorting)
    {
        $this->fieldSorting = $fieldSorting;
    }

    /**
     * Returns the options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets the options
     *
     * @param string $options
     * @return void
     */
    public function setOptions(string $options)
    {
        $this->options = $options;
    }

    /**
     * Returns the healthcareProvider
     *
     * @return \WIND\WindPatientRegistration\Domain\Model\CareProvider
     */
    public function getHealthcareProvider()
    {
        return $this->healthcareProvider;
    }

    /**
     * Sets the healthcareProvider
     *
     * @param \WIND\WindPatientRegistration\Domain\Model\CareProvider $healthcareProvider
     * @return void
     */
    public function setHealthcareProvider(\WIND\WindPatientRegistration\Domain\Model\CareProvider $healthcareProvider)
    {
        $this->healthcareProvider = $healthcareProvider;
    }
}
