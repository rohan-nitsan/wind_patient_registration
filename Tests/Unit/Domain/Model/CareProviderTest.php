<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class CareProviderTest extends UnitTestCase
{
    /**
     * @var \WIND\WindPatientRegistration\Domain\Model\CareProvider|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WIND\WindPatientRegistration\Domain\Model\CareProvider::class,
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
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getWebsiteReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getWebsite()
        );
    }

    /**
     * @test
     */
    public function setWebsiteForStringSetsWebsite(): void
    {
        $this->subject->setWebsite('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('website'));
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
    public function getHouseNumberReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getHouseNumber()
        );
    }

    /**
     * @test
     */
    public function setHouseNumberForIntSetsHouseNumber(): void
    {
        $this->subject->setHouseNumber(12);

        self::assertEquals(12, $this->subject->_get('houseNumber'));
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
    public function getEmailAdministrationReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getEmailAdministration()
        );
    }

    /**
     * @test
     */
    public function setEmailAdministrationForStringSetsEmailAdministration(): void
    {
        $this->subject->setEmailAdministration('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('emailAdministration'));
    }

    /**
     * @test
     */
    public function getLongitudeReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLongitude()
        );
    }

    /**
     * @test
     */
    public function setLongitudeForStringSetsLongitude(): void
    {
        $this->subject->setLongitude('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('longitude'));
    }

    /**
     * @test
     */
    public function getLatitudeReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getLatitude()
        );
    }

    /**
     * @test
     */
    public function setLatitudeForStringSetsLatitude(): void
    {
        $this->subject->setLatitude('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('latitude'));
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
    public function getCreditReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getCredit()
        );
    }

    /**
     * @test
     */
    public function setCreditForIntSetsCredit(): void
    {
        $this->subject->setCredit(12);

        self::assertEquals(12, $this->subject->_get('credit'));
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForCareType(): void
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForCareTypeSetsType(): void
    {
        $typeFixture = new \WIND\WindPatientRegistration\Domain\Model\CareType();
        $this->subject->setType($typeFixture);

        self::assertEquals($typeFixture, $this->subject->_get('type'));
    }

    /**
     * @test
     */
    public function getInfoSystemReturnsInitialValueForInformationSystem(): void
    {
        self::assertEquals(
            null,
            $this->subject->getInfoSystem()
        );
    }

    /**
     * @test
     */
    public function setInfoSystemForInformationSystemSetsInfoSystem(): void
    {
        $infoSystemFixture = new \WIND\WindPatientRegistration\Domain\Model\InformationSystem();
        $this->subject->setInfoSystem($infoSystemFixture);

        self::assertEquals($infoSystemFixture, $this->subject->_get('infoSystem'));
    }

    /**
     * @test
     */
    public function getServiceAreaReturnsInitialValueForServiceArea(): void
    {
        self::assertEquals(
            null,
            $this->subject->getServiceArea()
        );
    }

    /**
     * @test
     */
    public function setServiceAreaForServiceAreaSetsServiceArea(): void
    {
        $serviceAreaFixture = new \WIND\WindPatientRegistration\Domain\Model\ServiceArea();
        $this->subject->setServiceArea($serviceAreaFixture);

        self::assertEquals($serviceAreaFixture, $this->subject->_get('serviceArea'));
    }
}
