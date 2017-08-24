<?php
namespace PueNeueSpalte\PueSpalten\Domain\Model;

/***
 *
 * This file is part of the "pue_search Extension" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Nicolas Puente <nicolaspuente@web.de>
 *
 ***/

/**
 * Neu Spalten für fe_users Tabelle
 */
class NewSpalteFeUsers extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{
    /**
     * Adresse wird angezeigt: ja/nein
     * 
     * @var bool
     * @validate NotEmpty
     */
    protected $puespaltenaddredpub = false;

    /**
     * e-mail wird angezeigt: ja/nein
     * 
     * @var bool
     * @validate NotEmpty
     */
    protected $puespaltencontactmailpub = false;

    /**
     * Telefonnummer wird angezeigt: ja/nein
     * 
     * @var bool
     * @validate NotEmpty
     */
    protected $puespaltencontacttelpub = false;

    /**
     * Internetadresse wird angezeigt: ja/nein
     * 
     * @var bool
     * @validate NotEmpty
     */
    protected $puespaltenlinkpub = false;

    /**
     * PDF-Dokument, die heruntergeladen werden kann
     * 
     * @var string
     */
    protected $puespaltendocpdf = '';

    /**
     * puespaltendocpdfpub
     * 
     * @var bool
     */
    protected $puespaltendocpdfpub = false;

    /**
     * Bezeichnung der Gruppe
     * 
     * @var \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr
     */
    protected $puespaltengrptxt = null;

    /**
     * puespaltenlangtxt
     * 
     * @var \PueNeueSpalte\PueSpalten\Domain\Model\Language
     */
    protected $puespaltenlangtxt = null;

    /**
     * Die Handynummer
     * 
     * @var string
     */
    protected $puespaltenhandy = '';

    /**
     * Handynummer wird angezeigt: ja/nein
     * 
     * @var bool
     */
    protected $puespaltenhandypub = false;

    /**
     * Returns the boolean state of addridpub
     * 
     * @return bool
     */
    public function isAddridpub()
    {
        return $this->addridpub;
    }

    /**
     * Returns the boolean state of contactmailpub
     * 
     * @return bool
     */
    public function isContactmailpub()
    {
        return $this->contactmailpub;
    }

    /**
     * Returns the boolean state of contacttelpub
     * 
     * @return bool
     */
    public function isContacttelpub()
    {
        return $this->contacttelpub;
    }

    /**
     * Returns the boolean state of linkpub
     * 
     * @return bool
     */
    public function isLinkpub()
    {
        return $this->linkpub;
    }

    /**
     * Returns the puespaltencontactmailpub
     * 
     * @return bool puespaltencontactmailpub
     */
    public function getPuespaltencontactmailpub()
    {
        return $this->puespaltencontactmailpub;
    }

    /**
     * Sets the puespaltencontactmailpub
     * 
     * @param bool $puespaltencontactmailpub
     * @return void
     */
    public function setPuespaltencontactmailpub($puespaltencontactmailpub)
    {
        $this->puespaltencontactmailpub = $puespaltencontactmailpub;
    }

    /**
     * Returns the puespaltencontacttelpub
     * 
     * @return bool puespaltencontacttelpub
     */
    public function getPuespaltencontacttelpub()
    {
        return $this->puespaltencontacttelpub;
    }

    /**
     * Sets the puespaltencontacttelpub
     * 
     * @param bool $puespaltencontacttelpub
     * @return void
     */
    public function setPuespaltencontacttelpub($puespaltencontacttelpub)
    {
        $this->puespaltencontacttelpub = $puespaltencontacttelpub;
    }

    /**
     * Returns the puespaltenlinkpub
     * 
     * @return bool puespaltenlinkpub
     */
    public function getPuespaltenlinkpub()
    {
        return $this->puespaltenlinkpub;
    }

    /**
     * Sets the puespaltenlinkpub
     * 
     * @param bool $puespaltenlinkpub
     * @return void
     */
    public function setPuespaltenlinkpub($puespaltenlinkpub)
    {
        $this->puespaltenlinkpub = $puespaltenlinkpub;
    }

    /**
     * Returns the puespaltengrptxt
     * 
     * @return \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr puespaltengrptxt
     */
    public function getPuespaltengrptxt()
    {
        return $this->puespaltengrptxt;
    }

    /**
     * Sets the puespaltengrptxt
     * 
     * @param \PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr $puespaltengrptxt
     * @return void
     */
    public function setPuespaltengrptxt(\PueNeueSpalte\PueSpalten\Domain\Model\GrpForAdr $puespaltengrptxt)
    {
        $this->puespaltengrptxt = $puespaltengrptxt;
    }

    /**
     * Returns the puespaltenlangtxt
     * 
     * @return \PueNeueSpalte\PueSpalten\Domain\Model\Language puespaltenlangtxt
     */
    public function getPuespaltenlangtxt()
    {
        return $this->puespaltenlangtxt;
    }

    /**
     * Sets the puespaltenlangtxt
     * 
     * @param \PueNeueSpalte\PueSpalten\Domain\Model\Language $puespaltenlangtxt
     * @return void
     */
    public function setPuespaltenlangtxt(\PueNeueSpalte\PueSpalten\Domain\Model\Language $puespaltenlangtxt)
    {
        $this->puespaltenlangtxt = $puespaltenlangtxt;
    }

    /**
     * Returns the puespaltenaddredpub
     * 
     * @return bool puespaltenaddredpub
     */
    public function getPuespaltenaddredpub()
    {
        return $this->puespaltenaddredpub;
    }

    /**
     * Sets the puespaltenaddredpub
     * 
     * @param bool $puespaltenaddredpub
     * @return void
     */
    public function setPuespaltenaddredpub($puespaltenaddredpub)
    {
        $this->puespaltenaddredpub = $puespaltenaddredpub;
    }

    /**
     * Returns the puespaltendocpdf
     * 
     * @return string $puespaltendocpdf
     */
    public function getPuespaltendocpdf()
    {
        return $this->puespaltendocpdf;
    }

    /**
     * Sets the puespaltendocpdf
     * 
     * @param string $puespaltendocpdf
     * @return void
     */
    public function setPuespaltendocpdf($puespaltendocpdf)
    {
        $this->puespaltendocpdf = $puespaltendocpdf;
    }

    /**
     * Returns the puespaltendocpdfpub
     * 
     * @return bool $puespaltendocpdfpub
     */
    public function getPuespaltendocpdfpub()
    {
        return $this->puespaltendocpdfpub;
    }

    /**
     * Sets the puespaltendocpdfpub
     * 
     * @param bool $puespaltendocpdfpub
     * @return void
     */
    public function setPuespaltendocpdfpub($puespaltendocpdfpub)
    {
        $this->puespaltendocpdfpub = $puespaltendocpdfpub;
    }

    /**
     * Returns the boolean state of puespaltendocpdfpub
     * 
     * @return bool
     */
    public function isPuespaltendocpdfpub()
    {
        return $this->puespaltendocpdfpub;
    }

    /**
     * Returns the puespaltenhandy
     * 
     * @return string $puespaltenhandy
     */
    public function getPuespaltenhandy()
    {
        return $this->puespaltenhandy;
    }

    /**
     * Sets the puespaltenhandy
     * 
     * @param string $puespaltenhandy
     * @return void
     */
    public function setPuespaltenhandy($puespaltenhandy)
    {
        $this->puespaltenhandy = $puespaltenhandy;
    }

    /**
     * Returns the puespaltenhandypub
     * 
     * @return bool $puespaltenhandypub
     */
    public function getPuespaltenhandypub()
    {
        return $this->puespaltenhandypub;
    }

    /**
     * Sets the puespaltenhandypub
     * 
     * @param bool $puespaltenhandypub
     * @return void
     */
    public function setPuespaltenhandypub($puespaltenhandypub)
    {
        $this->puespaltenhandypub = $puespaltenhandypub;
    }

    /**
     * Returns the boolean state of puespaltenhandypub
     * 
     * @return bool
     */
    public function isPuespaltenhandypub()
    {
        return $this->puespaltenhandypub;
    }
}
