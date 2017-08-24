<?php
namespace PueNeueSpalte\PueSpalten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Nicolas Puente <nicolaspuente@web.de>
 */
class LanguageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PueNeueSpalte\PueSpalten\Domain\Model\Language
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PueNeueSpalte\PueSpalten\Domain\Model\Language();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPuespaltenlangtxtReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltenlangtxt()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenlangtxtForStringSetsPuespaltenlangtxt()
    {
        $this->subject->setPuespaltenlangtxt('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltenlangtxt',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenlanghtmliconReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltenlanghtmlicon()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenlanghtmliconForStringSetsPuespaltenlanghtmlicon()
    {
        $this->subject->setPuespaltenlanghtmlicon('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltenlanghtmlicon',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenlangtxteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltenlangtxte()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenlangtxteForStringSetsPuespaltenlangtxte()
    {
        $this->subject->setPuespaltenlangtxte('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltenlangtxte',
            $this->subject
        );

    }
}
