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
 * FormField
 */
class FormField extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * type
     *
     * @var int
     */
    protected $type = 0;

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
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType(int $type)
    {
        $this->type = $type;
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
