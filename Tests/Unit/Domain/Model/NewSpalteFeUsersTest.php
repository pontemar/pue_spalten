<?php
namespace PueNeueSpalte\PueSpalten\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Nicolas Puente <nicolaspuente@web.de>
 */
class NewSpalteFeUsersTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \PueNeueSpalte\PueSpalten\Domain\Model\NewSpalteFeUsers
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PueNeueSpalte\PueSpalten\Domain\Model\NewSpalteFeUsers();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getPuespaltenaddredpubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltenaddredpub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenaddredpubForBoolSetsPuespaltenaddredpub()
    {
        $this->subject->setPuespaltenaddredpub(true);

        self::assertAttributeEquals(
            true,
            'puespaltenaddredpub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltencontactmailpubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltencontactmailpub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltencontactmailpubForBoolSetsPuespaltencontactmailpub()
    {
        $this->subject->setPuespaltencontactmailpub(true);

        self::assertAttributeEquals(
            true,
            'puespaltencontactmailpub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltencontacttelpubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltencontacttelpub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltencontacttelpubForBoolSetsPuespaltencontacttelpub()
    {
        $this->subject->setPuespaltencontacttelpub(true);

        self::assertAttributeEquals(
            true,
            'puespaltencontacttelpub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenlinkpubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltenlinkpub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenlinkpubForBoolSetsPuespaltenlinkpub()
    {
        $this->subject->setPuespaltenlinkpub(true);

        self::assertAttributeEquals(
            true,
            'puespaltenlinkpub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltendocpdfReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltendocpdf()
        );

    }

    /**
     * @test
     */
    public function setPuespaltendocpdfForStringSetsPuespaltendocpdf()
    {
        $this->subject->setPuespaltendocpdf('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltendocpdf',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltendocpdfpubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltendocpdfpub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltendocpdfpubForBoolSetsPuespaltendocpdfpub()
    {
        $this->subject->setPuespaltendocpdfpub(true);

        self::assertAttributeEquals(
            true,
            'puespaltendocpdfpub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenhandyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPuespaltenhandy()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenhandyForStringSetsPuespaltenhandy()
    {
        $this->subject->setPuespaltenhandy('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'puespaltenhandy',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenhandypubReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getPuespaltenhandypub()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenhandypubForBoolSetsPuespaltenhandypub()
    {
        $this->subject->setPuespaltenhandypub(true);

        self::assertAttributeEquals(
            true,
            'puespaltenhandypub',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltengrptxtReturnsInitialValueForGrpForAdr()
    {
        self::assertEquals(
            null,
            $this->subject->getPuespaltengrptxt()
        );

    }

    /**
     * @test
     */
    public function setPuespaltengrptxtForGrpForAdrSetsPuespaltengrptxt()
    {
        $puespaltengrptxtFixture = new \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr();
        $this->subject->setPuespaltengrptxt($puespaltengrptxtFixture);

        self::assertAttributeEquals(
            $puespaltengrptxtFixture,
            'puespaltengrptxt',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getPuespaltenlangtxtReturnsInitialValueForLanguage()
    {
        self::assertEquals(
            null,
            $this->subject->getPuespaltenlangtxt()
        );

    }

    /**
     * @test
     */
    public function setPuespaltenlangtxtForLanguageSetsPuespaltenlangtxt()
    {
        $puespaltenlangtxtFixture = new \PueNeueSpalte\PueSpalten\Domain\Model\Language();
        $this->subject->setPuespaltenlangtxt($puespaltenlangtxtFixture);

        self::assertAttributeEquals(
            $puespaltenlangtxtFixture,
            'puespaltenlangtxt',
            $this->subject
        );

    }
}
