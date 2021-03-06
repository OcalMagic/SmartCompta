<?php

namespace AE\DashBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactureProduit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class FactureProduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="AE\DashBundle\Entity\Factures", cascade={"persist"})
     */

    private $factures;

    /**
     * @ORM\ManyToOne(targetEntity="AE\DashBundle\Entity\Produits", cascade={"persist"})
     */

    private $produits;

    /**
     * @ORM\Column(type="float")
     */

    private $prixTotalHT;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return FactureProduit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set factures
     *
     * @param \AE\DashBundle\Entity\Factures $factures
     * @return FactureProduit
     */
    public function setFactures(\AE\DashBundle\Entity\Factures $factures = null)
    {
        $this->factures = $factures;

        return $this;
    }

    /**
     * Get factures
     *
     * @return \AE\DashBundle\Entity\Factures
     */
    public function getFactures()
    {
        return $this->factures;
    }

    /**
     * Set produits
     *
     * @param \AE\DashBundle\Entity\Produits $produits
     * @return FactureProduit
     */
    public function setProduits(\AE\DashBundle\Entity\Produits $produits = null)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return \AE\DashBundle\Entity\Produits
     */
    public function getProduits()
    {
        return $this->produits;
    }

    /**
     * Set prixTotalHT
     *
     * @param float $prixTotalHT
     * @return FactureProduit
     */
    public function setPrixTotalHT($prixTotalHT)
    {
        $this->prixTotalHT = $prixTotalHT;

        return $this;
    }

    /**
     * Get prixTotalHT
     *
     * @return float 
     */
    public function getPrixTotalHT()
    {
        return $this->prixTotalHT;
    }
}
