<?php

namespace EDR\AppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="EDR\AppliBundle\Repository\CategorieRepository")
 */
class Categorie
{
    
    public function __toString() {
        return $this->nom;
    }
    //Code généré//
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
     * @ORM\Column(name="nom", type="string", length=50, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="icongoogle", type="string", length=50)
     */
    private $icongoogle;


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
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set icongoogle
     *
     * @param string $icongoogle
     * @return Categorie
     */
    public function setIcongoogle($icongoogle)
    {
        $this->icongoogle = $icongoogle;

        return $this;
    }

    /**
     * Get icongoogle
     *
     * @return string
     */
    public function getIcongoogle()
    {
        return $this->icongoogle;
    }
}
