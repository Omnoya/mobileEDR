<?php

namespace EDR\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis")
 * @ORM\Entity(repositoryClass="EDR\AppliBundle\Repository\AvisRepository")
 */
class Avis
{
    /**
     * @ORM\ManyToOne(targetEntity="EDR\AppliBundle\Entity\Etablissement")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etablissement;

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
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="smallint")
     */
    private $note;

    /**
     * @var bool
     *
     * @ORM\Column(name="favoris", type="boolean")
     */
    private $favoris;

    /**
     * @var bool
     *
     * @ORM\Column(name="sauvegarde", type="boolean")
     */
    private $sauvegarde;


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
     * Set commentaire
     *
     * @param string $commentaire
     * @return Avis
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Avis
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set favoris
     *
     * @param boolean $favoris
     * @return Avis
     */
    public function setFavoris($favoris)
    {
        $this->favoris = $favoris;

        return $this;
    }

    /**
     * Get favoris
     *
     * @return boolean 
     */
    public function getFavoris()
    {
        return $this->favoris;
    }

    /**
     * Set sauvegarde
     *
     * @param boolean $sauvegarde
     * @return Avis
     */
    public function setSauvegarde($sauvegarde)
    {
        $this->sauvegarde = $sauvegarde;

        return $this;
    }

    /**
     * Get sauvegarde
     *
     * @return boolean 
     */
    public function getSauvegarde()
    {
        return $this->sauvegarde;
    }

    /**
     * Set etablissement
     *
     * @param \EDR\AppliBundle\Entity\Etablissement $etablissement
     * @return Avis
     */
    public function setEtablissement(Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \EDR\AppliBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
