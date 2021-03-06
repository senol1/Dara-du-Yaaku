<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaires
 *
 * @ORM\Table(name="horaires")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HorairesRepository")
 */
class Horaires
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=255)
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="time")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="time")
     */
    private $fin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation", type="datetimetz")
     */
    private $creation;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @ORM\OneToMany(targetEntity="Magasin", mappedBy="horaire")
     */
    private $magasins;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set jour
     *
     * @param string $jour
     *
     * @return Horaires
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Horaires
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Horaires
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set creation
     *
     * @param \DateTime $creation
     *
     * @return Horaires
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return \DateTime
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Horaires
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->magasins = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add magasin
     *
     * @param \AppBundle\Entity\Magasin $magasin
     *
     * @return Horaires
     */
    public function addMagasin(\AppBundle\Entity\Magasin $magasin)
    {
        $this->magasins[] = $magasin;

        return $this;
    }

    /**
     * Remove magasin
     *
     * @param \AppBundle\Entity\Magasin $magasin
     */
    public function removeMagasin(\AppBundle\Entity\Magasin $magasin)
    {
        $this->magasins->removeElement($magasin);
    }

    /**
     * Get magasins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMagasins()
    {
        return $this->magasins;
    }
}
