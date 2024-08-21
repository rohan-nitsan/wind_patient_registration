<?php

declare(strict_types=1);

namespace WIND\WindPatientRegistration\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class ServiceAreaTest extends UnitTestCase
{
    /**
     * @var \WIND\WindPatientRegistration\Domain\Model\ServiceArea|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \WIND\WindPatientRegistration\Domain\Model\ServiceArea::class,
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
    public function getStartReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getStart()
        );
    }

    /**
     * @test
     */
    public function setStartForIntSetsStart(): void
    {
        $this->subject->setStart(12);

        self::assertEquals(12, $this->subject->_get('start'));
    }

    /**
     * @test
     */
    public function getEndReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getEnd()
        );
    }

    /**
     * @test
     */
    public function setEndForIntSetsEnd(): void
    {
        $this->subject->setEnd(12);

        self::assertEquals(12, $this->subject->_get('end'));
    }
}
