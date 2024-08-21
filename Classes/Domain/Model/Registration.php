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
 * Registration
 */
class Registration extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * identifier
     *
     * @var string
     */
    protected $identifier = '';

    /**
     * bsn
     *
     * @var string
     */
    protected $bsn = '';

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * initials
     *
     * @var string
     */
    protected $initials = '';

    /**
     * prefix
     *
     * @var string
     */
    protected $prefix = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * birthday
     *
     * @var \DateTime
     */
    protected $birthday = null;

    /**
     * birthPlace
     *
     * @var string
     */
    protected $birthPlace = '';

    /**
     * gender
     *
     * @var string
     */
    protected $gender = '';

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * houseNumber
     *
     * @var string
     */
    protected $houseNumber = '';

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
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * verified
     *
     * @var bool
     */
    protected $verified = false;

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * phone2
     *
     * @var string
     */
    protected $phone2 = '';

    /**
     * phone3
     *
     * @var string
     */
    protected $phone3 = '';

    /**
     * phone4
     *
     * @var string
     */
    protected $phone4 = '';

    /**
     * phone5
     *
     * @var string
     */
    protected $phone5 = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * status
     *
     * @var int
     */
    protected $status = 0;

    /**
     * healthcareProvider
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\CareProvider
     */
    protected $healthcareProvider = null;

    /**
     * children
     *
     * @var \WIND\WindPatientRegistration\Domain\Model\ChildRegistration
     */
    protected $children = null;

    /**
     * Returns the identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     *
     * @param string $identifier
     * @return void
     */
    public function setIdentifier(string $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the bsn
     *
     * @return string
     */
    public function getBsn()
    {
        return $this->bsn;
    }

    /**
     * Sets the bsn
     *
     * @param string $bsn
     * @return void
     */
    public function setBsn(string $bsn)
    {
        $this->bsn = $bsn;
    }

    /**
     * Returns the name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the initials
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Sets the initials
     *
     * @param string $initials
     * @return void
     */
    public function setInitials(string $initials)
    {
        $this->initials = $initials;
    }

    /**
     * Returns the prefix
     *
     * @return string
     */
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Sets the prefix
     *
     * @param string $prefix
     * @return void
     */
    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
    }

    /**
     * Returns the lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Sets the birthday
     *
     * @param \DateTime $birthday
     * @return void
     */
    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Returns the birthPlace
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Sets the birthPlace
     *
     * @param string $birthPlace
     * @return void
     */
    public function setBirthPlace(string $birthPlace)
    {
        $this->birthPlace = $birthPlace;
    }

    /**
     * Returns the gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the gender
     *
     * @param string $gender
     * @return void
     */
    public function setGender(string $gender)
    {
        $this->gender = $gender;
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
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Sets the houseNumber
     *
     * @param string $houseNumber
     * @return void
     */
    public function setHouseNumber(string $houseNumber)
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
     * Returns the city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the verified
     *
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Sets the verified
     *
     * @param bool $verified
     * @return void
     */
    public function setVerified(bool $verified)
    {
        $this->verified = $verified;
    }

    /**
     * Returns the boolean state of verified
     *
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * Returns the phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the phone2
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Sets the phone2
     *
     * @param string $phone2
     * @return void
     */
    public function setPhone2(string $phone2)
    {
        $this->phone2 = $phone2;
    }

    /**
     * Returns the phone3
     *
     * @return string
     */
    public function getPhone3()
    {
        return $this->phone3;
    }

    /**
     * Sets the phone3
     *
     * @param string $phone3
     * @return void
     */
    public function setPhone3(string $phone3)
    {
        $this->phone3 = $phone3;
    }

    /**
     * Returns the phone4
     *
     * @return string
     */
    public function getPhone4()
    {
        return $this->phone4;
    }

    /**
     * Sets the phone4
     *
     * @param string $phone4
     * @return void
     */
    public function setPhone4(string $phone4)
    {
        $this->phone4 = $phone4;
    }

    /**
     * Returns the phone5
     *
     * @return string
     */
    public function getPhone5()
    {
        return $this->phone5;
    }

    /**
     * Sets the phone5
     *
     * @param string $phone5
     * @return void
     */
    public function setPhone5(string $phone5)
    {
        $this->phone5 = $phone5;
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

    /**
     * Returns the children
     *
     * @return \WIND\WindPatientRegistration\Domain\Model\ChildRegistration
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Sets the children
     *
     * @param \WIND\WindPatientRegistration\Domain\Model\ChildRegistration $children
     * @return void
     */
    public function setChildren(\WIND\WindPatientRegistration\Domain\Model\ChildRegistration $children)
    {
        $this->children = $children;
    }
}
