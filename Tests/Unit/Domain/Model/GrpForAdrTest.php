<?php
namespace PueNeueSpalte\PueSpalten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Nicolas Puente <nicolaspuente@web.de>
 */
class GrpForAdrTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPuespaltengrptxtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltengrptxt()
        );

    }

    /**
     * @test
     */
    public function setPuespaltengrptxtForStringSetsPuespaltengrptxt()
    {
        $this->subject->setPuespaltengrptxt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltengrptxt',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltengrpsortReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setPuespaltengrpsortForIntSetsPuespaltengrpsort()
    {
    }
}
