<?php

namespace RentCarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="RentCarBundle\Repository\CarRepository")
 */
class Car
{
	 /**
     * @ManyToOne(targetEntity="idSamochodu", inversedBy="Samochod_id")
     * @JoinColumn(name="Samochod_id", mappedBy="car")
     */
     /**
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /*
     * @var string
     *
     * @ORM\Column(name="Marka", type="string", length=50)
     */
    private $marka;

    /**
     * @var string
     *
     * @ORM\Column(name="Model", type="string", length=100)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="Rocznik", type="string", length=5)
     */
    private $rocznik;

    /**
     * @var float
     *
     * @ORM\Column(name="Cena", type="float")
     */
    private $cena;

    /**
     * @var string
     *
     * @ORM\Column(name="Klasa", type="string", length=150)
     */
    private $klasa;


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
     * Set marka
     *
     * @param string $marka
     *
     * @return Car
     */
    public function setMarka($marka)
    {
        $this->marka = $marka;

        return $this;
    }

    /**
     * Get marka
     *
     * @return string
     */
    public function getMarka()
    {
        return $this->marka;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set rocznik
     *
     * @param string $rocznik
     *
     * @return Car
     */
    public function setRocznik($rocznik)
    {
        $this->rocznik = $rocznik;

        return $this;
    }

    /**
     * Get rocznik
     *
     * @return string
     */
    public function getRocznik()
    {
        return $this->rocznik;
    }

    /**
     * Set cena
     *
     * @param float $cena
     *
     * @return Car
     */
    public function setCena($cena)
    {
        $this->cena = $cena;

        return $this;
    }

    /**
     * Get cena
     *
     * @return float
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * Set klasa
     *
     * @param string $klasa
     *
     * @return Car
     */
    public function setKlasa($klasa)
    {
        $this->klasa = $klasa;

        return $this;
    }

    /**
     * Get klasa
     *
     * @return string
     */
    public function getKlasa()
    {
        return $this->klasa;
    }
}

