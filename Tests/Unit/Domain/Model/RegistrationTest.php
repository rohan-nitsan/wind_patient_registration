<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class RegistrationTest extends UnitTestCase
{
    /**
     * @var \WIND\WindPatientRegistration\Domain\Model\Registration|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WIND\WindPatientRegistration\Domain\Model\Registration::class,
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
    public function getIdentifierReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getIdentifier()
        );
    }

    /**
     * @test
     */
    public function setIdentifierForStringSetsIdentifier(): void
    {
        $this->subject->setIdentifier('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('identifier'));
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
    public function getNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName(): void
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('name'));
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName(): void
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('firstName'));
    }

    /**
     * @test
     */
    public function getInitialsReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getInitials()
        );
    }

    /**
     * @test
     */
    public function setInitialsForStringSetsInitials(): void
    {
        $this->subject->setInitials('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('initials'));
    }

    /**
     * @test
     */
    public function getPrefixReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPrefix()
        );
    }

    /**
     * @test
     */
    public function setPrefixForStringSetsPrefix(): void
    {
        $this->subject->setPrefix('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('prefix'));
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName(): void
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('lastName'));
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
    public function getBirthPlaceReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getBirthPlace()
        );
    }

    /**
     * @test
     */
    public function setBirthPlaceForStringSetsBirthPlace(): void
    {
        $this->subject->setBirthPlace('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('birthPlace'));
    }

    /**
     * @test
     */
    public function getGenderReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getGender()
        );
    }

    /**
     * @test
     */
    public function setGenderForStringSetsGender(): void
    {
        $this->subject->setGender('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('gender'));
    }

    /**
     * @test
     */
    public function getStreetReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getStreet()
        );
    }

    /**
     * @test
     */
    public function setStreetForStringSetsStreet(): void
    {
        $this->subject->setStreet('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('street'));
    }

    /**
     * @test
     */
    public function getHouseNumberReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getHouseNumber()
        );
    }

    /**
     * @test
     */
    public function setHouseNumberForStringSetsHouseNumber(): void
    {
        $this->subject->setHouseNumber('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('houseNumber'));
    }

    /**
     * @test
     */
    public function getHouseNumberAdditionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getHouseNumberAddition()
        );
    }

    /**
     * @test
     */
    public function setHouseNumberAdditionForStringSetsHouseNumberAddition(): void
    {
        $this->subject->setHouseNumberAddition('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('houseNumberAddition'));
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip(): void
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('zip'));
    }

    /**
     * @test
     */
    public function getCityReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCity()
        );
    }

    /**
     * @test
     */
    public function setCityForStringSetsCity(): void
    {
        $this->subject->setCity('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('city'));
    }

    /**
     * @test
     */
    public function getVerifiedReturnsInitialValueForBool(): void
    {
        self::assertFalse($this->subject->getVerified());
    }

    /**
     * @test
     */
    public function setVerifiedForBoolSetsVerified(): void
    {
        $this->subject->setVerified(true);

        self::assertEquals(true, $this->subject->_get('verified'));
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone(): void
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('phone'));
    }

    /**
     * @test
     */
    public function getPhone2ReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPhone2()
        );
    }

    /**
     * @test
     */
    public function setPhone2ForStringSetsPhone2(): void
    {
        $this->subject->setPhone2('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('phone2'));
    }

    /**
     * @test
     */
    public function getPhone3ReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPhone3()
        );
    }

    /**
     * @test
     */
    public function setPhone3ForStringSetsPhone3(): void
    {
        $this->subject->setPhone3('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('phone3'));
    }

    /**
     * @test
     */
    public function getPhone4ReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPhone4()
        );
    }

    /**
     * @test
     */
    public function setPhone4ForStringSetsPhone4(): void
    {
        $this->subject->setPhone4('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('phone4'));
    }

    /**
     * @test
     */
    public function getPhone5ReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPhone5()
        );
    }

    /**
     * @test
     */
    public function setPhone5ForStringSetsPhone5(): void
    {
        $this->subject->setPhone5('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('phone5'));
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail(): void
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('email'));
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

    /**
     * @test
     */
    public function getHealthcareProviderReturnsInitialValueForCareProvider(): void
    {
        self::assertEquals(
            null,
            $this->subject->getHealthcareProvider()
        );
    }

    /**
     * @test
     */
    public function setHealthcareProviderForCareProviderSetsHealthcareProvider(): void
    {
        $healthcareProviderFixture = new \WIND\WindPatientRegistration\Domain\Model\CareProvider();
        $this->subject->setHealthcareProvider($healthcareProviderFixture);

        self::assertEquals($healthcareProviderFixture, $this->subject->_get('healthcareProvider'));
    }

    /**
     * @test
     */
    public function getChildrenReturnsInitialValueForChildRegistration(): void
    {
        self::assertEquals(
            null,
            $this->subject->getChildren()
        );
    }

    /**
     * @test
     */
    public function setChildrenForChildRegistrationSetsChildren(): void
    {
        $childrenFixture = new \WIND\WindPatientRegistration\Domain\Model\ChildRegistration();
        $this->subject->setChildren($childrenFixture);

        self::assertEquals($childrenFixture, $this->subject->_get('children'));
    }
}
