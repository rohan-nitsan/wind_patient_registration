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
 * ChildRegistration
 */
class ChildRegistration extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bsn
     *
     * @var string
     */
    protected $bsn = '';

    /**
     * birthday
     *
     * @var \DateTime
     */
    protected $birthday = null;

    /**
     * permissionRequired
     *
     * @var bool
     */
    protected $permissionRequired = false;

    /**
     * guardianName
     *
     * @var string
     */
    protected $guardianName = '';

    /**
     * guardianEmail
     *
     * @var string
     */
    protected $guardianEmail = '';

    /**
     * status
     *
     * @var int
     */
    protected $status = 0;

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
     * Returns the permissionRequired
     *
     * @return bool
     */
    public function getPermissionRequired()
    {
        return $this->permissionRequired;
    }

    /**
     * Sets the permissionRequired
     *
     * @param bool $permissionRequired
     * @return void
     */
    public function setPermissionRequired(bool $permissionRequired)
    {
        $this->permissionRequired = $permissionRequired;
    }

    /**
     * Returns the boolean state of permissionRequired
     *
     * @return bool
     */
    public function isPermissionRequired()
    {
        return $this->permissionRequired;
    }

    /**
     * Returns the guardianName
     *
     * @return string
     */
    public function getGuardianName()
    {
        return $this->guardianName;
    }

    /**
     * Sets the guardianName
     *
     * @param string $guardianName
     * @return void
     */
    public function setGuardianName(string $guardianName)
    {
        $this->guardianName = $guardianName;
    }

    /**
     * Returns the guardianEmail
     *
     * @return string
     */
    public function getGuardianEmail()
    {
        return $this->guardianEmail;
    }

    /**
     * Sets the guardianEmail
     *
     * @param string $guardianEmail
     * @return void
     */
    public function setGuardianEmail(string $guardianEmail)
    {
        $this->guardianEmail = $guardianEmail;
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
}
