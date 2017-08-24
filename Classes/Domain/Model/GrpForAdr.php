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
 * Adresslisten Gruppen
 */
class GrpForAdr extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Bezeichnung der Gruppe
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $puespaltengrptxt = '';

    /**
    * Die Reihenfolge der Sortierung der
    Gruppen
    * 
    * @var int
    * @validate NotEmpty
    */
    protected $puespaltengrpsort = 0;

    /**
     * Returns the puespaltengrptxt
     * 
     * @return string puespaltengrptxt
     */
    public function getPuespaltengrptxt()
    {
        return $this->puespaltengrptxt;
    }

    /**
     * Sets the puespaltengrptxt
     * 
     * @param string $puespaltengrptxt
     * @return void
     */
    public function setPuespaltengrptxt($puespaltengrptxt)
    {
        $this->puespaltengrptxt = $puespaltengrptxt;
    }

    /**
     * Returns the puespaltengrpsort
     * 
     * @return int puespaltengrpsort
     */
    public function getPuespaltengrpsort()
    {
        return $this->puespaltengrpsort;
    }

    /**
     * Sets the puespaltengrpsort
     * 
     * @param int $puespaltengrpsort
     * @return void
     */
    public function setPuespaltengrpsort($puespaltengrpsort)
    {
        $this->puespaltengrpsort = $puespaltengrpsort;
    }
}
