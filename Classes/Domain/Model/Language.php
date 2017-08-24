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
 * Sprachen
 */
class Language extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Sprachbezeichnung in Deutsch
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $puespaltenlangtxt = '';

    /**
    * visueller
    Hinweis zur Landessprache
    * 
    * @var string
    */
    protected $puespaltenlanghtmlicon = '';

    /**
     * Sprachbezeichnung in Englisch
     * 
     * @var string
     */
    protected $puespaltenlangtxte = '';

    /**
     * Returns the puespaltenlangtxt
     * 
     * @return string puespaltenlangtxt
     */
    public function getPuespaltenlangtxt()
    {
        return $this->puespaltenlangtxt;
    }

    /**
     * Sets the puespaltenlangtxt
     * 
     * @param string $puespaltenlangtxt
     * @return void
     */
    public function setPuespaltenlangtxt($puespaltenlangtxt)
    {
        $this->puespaltenlangtxt = $puespaltenlangtxt;
    }

    /**
     * Returns the puespaltenlanghtmlicon
     * 
     * @return string puespaltenlanghtmlicon
     */
    public function getPuespaltenlanghtmlicon()
    {
        return $this->puespaltenlanghtmlicon;
    }

    /**
     * Sets the puespaltenlanghtmlicon
     * 
     * @param string $puespaltenlanghtmlicon
     * @return void
     */
    public function setPuespaltenlanghtmlicon($puespaltenlanghtmlicon)
    {
        $this->puespaltenlanghtmlicon = $puespaltenlanghtmlicon;
    }

    /**
     * Returns the puespaltenlangtxte
     * 
     * @return string puespaltenlangtxte
     */
    public function getPuespaltenlangtxte()
    {
        return $this->puespaltenlangtxte;
    }

    /**
     * Sets the puespaltenlangtxte
     * 
     * @param string $puespaltenlangtxte
     * @return void
     */
    public function setPuespaltenlangtxte($puespaltenlangtxte)
    {
        $this->puespaltenlangtxte = $puespaltenlangtxte;
    }
}
