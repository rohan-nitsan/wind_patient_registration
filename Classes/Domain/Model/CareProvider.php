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
 * CareProvider
 */
class CareProvider extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * website
     *
     * @var string
     */
    protected $website = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * houseNumber
     *
     * @var int
     */
    protected $houseNumber = 0;

    /**
     * houseNumberAddition
     *
     * @var string
     */
    protected $houseNumberAddition = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * emailAdministration
     *
     * @var string
     */
    protected $emailAdministration = '';

    /**
     * longitude
     *
     * @var string
     */
    protected $longitude = '';

    /**
     * latitude
     *
     * @var string
     */
    protected $latitude = '';

    /**
     * status
     *
     * @var int
     */
    protected $status = 0;

    /**
     * credit
     *
     * @var int
     */
    protected $credit = 0;

    /**
     * type
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\CareType
     */
    protected $type = null;

    /**
     * infoSystem
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\InformationSystem
     */
    protected $infoSystem = null;

    /**
     * serviceArea
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\ServiceArea
     */
    protected $serviceArea = null;

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
     * Returns the website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Sets the website
     *
     * @param string $website
     * @return void
     */
    public function setWebsite(string $website)
    {
        $this->website = $website;
    }

    /**
     * Returns the street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * Returns the houseNumber
     *
     * @return int
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets the houseNumber
     *
     * @param int $houseNumber
     * @return void
     */
    public function setHouseNumber(int $houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * Returns the houseNumberAddition
     *
     * @return string
     */
    public function getHouseNumberAddition()
    {
        return $this->houseNumberAddition;
    }

    /**
     * Sets the houseNumberAddition
     *
     * @param string $houseNumberAddition
     * @return void
     */
    public function setHouseNumberAddition(string $houseNumberAddition)
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    /**
     * Returns the zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns the email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Returns the emailAdministration
     *
     * @return string
     */
    public function getEmailAdministration()
    {
        return $this->emailAdministration;
    }

    /**
     * Sets the emailAdministration
     *
     * @param string $emailAdministration
     * @return void
     */
    public function setEmailAdministration(string $emailAdministration)
    {
        $this->emailAdministration = $emailAdministration;
    }

    /**
     * Returns the longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude
     *
     * @param string $longitude
     * @return void
     */
    public function setLongitude(string $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Returns the latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude
     *
     * @param string $latitude
     * @return void
     */
    public function setLatitude(string $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Returns the status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets the status
     *
     * @param int $status
     * @return void
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    /**
     * Returns the credit
     *
     * @return int
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Sets the credit
     *
     * @param int $credit
     * @return void
     */
    public function setCredit(int $credit)
    {
        $this->credit = $credit;
    }

    /**
     * Returns the type
     *
     * @return \WIND\WindPatientRegistration\Domain\Model\CareType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \WIND\WindPatientRegistration\Domain\Model\CareType $type
     * @return void
     */
    public function setType(\WIND\WindPatientRegistration\Domain\Model\CareType $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the infoSystem
     *
     * @return \WIND\WindPatientRegistration\Domain\Model\InformationSystem
     */
    public function getInfoSystem()
    {
        return $this->infoSystem;
    }

    /**
     * Sets the infoSystem
     *
     * @param \WIND\WindPatientRegistration\Domain\Model\InformationSystem $infoSystem
     * @return void
     */
    public function setInfoSystem(\WIND\WindPatientRegistration\Domain\Model\InformationSystem $infoSystem)
    {
        $this->infoSystem = $infoSystem;
    }

    /**
     * Returns the serviceArea
     *
     * @return \WIND\WindPatientRegistration\Domain\Model\ServiceArea
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * Sets the serviceArea
     *
     * @param \WIND\WindPatientRegistration\Domain\Model\ServiceArea $serviceArea
     * @return void
     */
    public function setServiceArea(\WIND\WindPatientRegistration\Domain\Model\ServiceArea $serviceArea)
    {
        $this->serviceArea = $serviceArea;
    }
}
