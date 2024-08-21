<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class FormFieldTest extends UnitTestCase
{
    /**
     * @var \WIND\WindPatientRegistration\Domain\Model\FormField|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WIND\WindPatientRegistration\Domain\Model\FormField::class,
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
    public function getTypeReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType(): void
    {
        $this->subject->setType(12);

        self::assertEquals(12, $this->subject->_get('type'));
    }

    /**
     * @test
     */
    public function getOptionsReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getOptions()
        );
    }

    /**
     * @test
     */
    public function setOptionsForStringSetsOptions(): void
    {
        $this->subject->setOptions('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('options'));
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
}
