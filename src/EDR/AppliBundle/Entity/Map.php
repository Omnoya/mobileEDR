<?php

namespace EDR\AppliBundle\Entity;

/**
 * Map
 */
class Map
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $descriptif;

    /**
     * @var string
     */
    private $photos;

    /**
     * @var \DateTime
     */
    private $horaires;

    /**
     * @var string
     */
    private $likeFB;

    /**
     * @var string
     */
    private $instagram;

    /**
     * @var int
     */
    private $noteCat;

    /**
     * @var int
     */
    private $prixmoyen;

    /**
     * @var string
     */
    private $bookmark;

    /**
     * @var string
     */
    private $upload;

    /**
     * @var text
     */
    private $itineraire;

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
     * Set descriptif
     *
     * @param string $descriptif
     *
     * @return Map
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;

        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set photos
     *
     * @param string $photos
     *
     * @return Map
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set horaires
     *
     * @param \DateTime $horaires
     *
     * @return Map
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get horaires
     *
     * @return \DateTime
     */
    public function getHoraires()
    {
        return $this->horaires;
    }

    /**
     * Set likeFB
     *
     * @param string $likeFB
     *
     * @return Map
     */
    public function setLikeFB($likeFB)
    {
        $this->likeFB = $likeFB;

        return $this;
    }

    /**
     * Get likeFB
     *
     * @return string
     */
    public function getLikeFB()
    {
        return $this->likeFB;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return Map
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set noteCat
     *
     * @param integer $noteCat
     *
     * @return Map
     */
    public function setNoteCat($noteCat)
    {
        $this->noteCat = $noteCat;

        return $this;
    }

    /**
     * Get noteCat
     *
     * @return int
     */
    public function getNoteCat()
    {
        return $this->noteCat;
    }
}

