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
 * ServiceArea
 */
class ServiceArea extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * start
     *
     * @var int
     */
    protected $start = 0;

    /**
     * end
     *
     * @var int
     */
    protected $end = 0;

    /**
     * Returns the start
     *
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets the start
     *
     * @param int $start
     * @return void
     */
    public function setStart(int $start)
    {
        $this->start = $start;
    }

    /**
     * Returns the end
     *
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets the end
     *
     * @param int $end
     * @return void
     */
    public function setEnd(int $end)
    {
        $this->end = $end;
    }
}
