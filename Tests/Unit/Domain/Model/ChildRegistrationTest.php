<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ChildRegistrationTest extends UnitTestCase
{
    /**
     * @var \WIND\WindPatientRegistration\Domain\Model\ChildRegistration|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WIND\WindPatientRegistration\Domain\Model\ChildRegistration::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getBsnReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getBsn()
        );
    }

    /**
     * @test
     */
    public function setBsnForStringSetsBsn(): void
    {
        $this->subject->setBsn('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('bsn'));
    }

    /**
     * @test
     */
    public function getBirthdayReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getBirthday()
        );
    }

    /**
     * @test
     */
    public function setBirthdayForDateTimeSetsBirthday(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthday($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('birthday'));
    }

    /**
     * @test
     */
    public function getPermissionRequiredReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getPermissionRequired());
    }

    /**
     * @test
     */
    public function setPermissionRequiredForBoolSetsPermissionRequired(): void
    {
        $this->subject->setPermissionRequired(true);

        self::assertEquals(true, $this->subject->_get('permissionRequired'));
    }

    /**
     * @test
     */
    public function getGuardianNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getGuardianName()
        );
    }

    /**
     * @test
     */
    public function setGuardianNameForStringSetsGuardianName(): void
    {
        $this->subject->setGuardianName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('guardianName'));
    }

    /**
     * @test
     */
    public function getGuardianEmailReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getGuardianEmail()
        );
    }

    /**
     * @test
     */
    public function setGuardianEmailForStringSetsGuardianEmail(): void
    {
        $this->subject->setGuardianEmail('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('guardianEmail'));
    }

    /**
     * @test
     */
    public function getStatusReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getStatus()
        );
    }

    /**
     * @test
     */
    public function setStatusForIntSetsStatus(): void
    {
        $this->subject->setStatus(12);

        self::assertEquals(12, $this->subject->_get('status'));
    }
}
