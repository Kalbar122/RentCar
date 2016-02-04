<?php

namespace RentCarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarOrder
 *
 * @ORM\Table(name="car_order")
 * @ORM\Entity(repositoryClass="RentCarBundle\Repository\CarOrderRepository")
 */
class CarOrder
{
    /**
     * @var int
     * @OneToMany(targetEntity="Car", mappedBy="idSamochodu")
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSamochod", type="integer")
     */
    private $idSamochod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataWypozyczenia", type="datetime", nullable=true)
     */
    private $dataWypozyczenia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataZwrotu", type="datetime", nullable=true)
     */
    private $dataZwrotu;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUzytkownika", type="integer")
     */
    private $idUzytkownika;


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
     * Set idSamochod
     *
     * @param integer $idSamochod
     *
     * @return CarOrder
     */
    public function setIdSamochod($idSamochod)
    {
        $this->idSamochod = $idSamochod;

        return $this;
    }

    /**
     * Get idSamochod
     *
     * @return int
     */
    public function getIdSamochod()
    {
        return $this->idSamochod;
    }

    /**
     * Set dataWypozyczenia
     *
     * @param \DateTime $dataWypozyczenia
     *
     * @return CarOrder
     */
    public function setDataWypozyczenia($dataWypozyczenia)
    {
        $this->dataWypozyczenia = $dataWypozyczenia;

        return $this;
    }

    /**
     * Get dataWypozyczenia
     *
     * @return \DateTime
     */
    public function getDataWypozyczenia()
    {
        return $this->dataWypozyczenia;
    }

    /**
     * Set dataZwrotu
     *
     * @param \DateTime $dataZwrotu
     *
     * @return CarOrder
     */
    public function setDataZwrotu($dataZwrotu)
    {
        $this->dataZwrotu = $dataZwrotu;

        return $this;
    }

    /**
     * Get dataZwrotu
     *
     * @return \DateTime
     */
    public function getDataZwrotu()
    {
        return $this->dataZwrotu;
    }

    /**
     * Set idUzytkownika
     *
     * @param integer $idUzytkownika
     *
     * @return CarOrder
     */
    public function setIdUzytkownika($idUzytkownika)
    {
        $this->idUzytkownika = $idUzytkownika;

        return $this;
    }

    /**
     * Get idUzytkownika
     *
     * @return int
     */
    public function getIdUzytkownika()
    {
        return $this->idUzytkownika;
    }
}

