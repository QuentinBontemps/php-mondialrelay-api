<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 2/02/19
 * Time: 16:26
 */

class Tracing
{
    private $stat;
    private $libelle01;
    private $libelle02;
    private $tracing;
    private $tracingLibelle;
    private $tracingDate;
    private $tracingHeure;
    private $tracingLieu;
    private $tracingPays;

    /**
     * Tracing constructor.
     * 
     * @param $stat
     * @param $libelle01
     * @param $libelle02
     * @param $tracing
     * @param $tracingLibelle
     * @param $tracingDate
     * @param $tracingHeure
     * @param $tracingLieu
     * @param $tracingPays
     */
    public function __construct(
        $stat,
        $libelle01,
        $libelle02,
        $tracing,
        $tracingLibelle,
        $tracingDate,
        $tracingHeure,
        $tracingLieu,
        $tracingPays
    )
    {
        $this->stat = $stat;
        $this->libelle01 = $libelle01;
        $this->libelle02 = $libelle02;
        $this->tracing = $tracing;
        $this->tracingLibelle = $tracingLibelle;
        $this->tracingDate = $tracingDate;
        $this->tracingHeure = $tracingHeure;
        $this->tracingLieu = $tracingLieu;
        $this->tracingPays = $tracingPays;
    }

    /**
     * @return mixed
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * @param mixed $stat
     * @return Tracing
     */
    public function setStat($stat)
    {
        $this->stat = $stat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLibelle01()
    {
        return $this->libelle01;
    }

    /**
     * @param mixed $libelle01
     * @return Tracing
     */
    public function setLibelle01($libelle01)
    {
        $this->libelle01 = $libelle01;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLibelle02()
    {
        return $this->libelle02;
    }

    /**
     * @param mixed $libelle02
     * @return Tracing
     */
    public function setLibelle02($libelle02)
    {
        $this->libelle02 = $libelle02;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracing()
    {
        return $this->tracing;
    }

    /**
     * @param mixed $tracing
     * @return Tracing
     */
    public function setTracing($tracing)
    {
        $this->tracing = $tracing;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracingLibelle()
    {
        return $this->tracingLibelle;
    }

    /**
     * @param mixed $tracingLibelle
     * @return Tracing
     */
    public function setTracingLibelle($tracingLibelle)
    {
        $this->tracingLibelle = $tracingLibelle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracingDate()
    {
        return $this->tracingDate;
    }

    /**
     * @param mixed $tracingDate
     * @return Tracing
     */
    public function setTracingDate($tracingDate)
    {
        $this->tracingDate = $tracingDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracingHeure()
    {
        return $this->tracingHeure;
    }

    /**
     * @param mixed $tracingHeure
     * @return Tracing
     */
    public function setTracingHeure($tracingHeure)
    {
        $this->tracingHeure = $tracingHeure;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracingLieu()
    {
        return $this->tracingLieu;
    }

    /**
     * @param mixed $tracingLieu
     * @return Tracing
     */
    public function setTracingLieu($tracingLieu)
    {
        $this->tracingLieu = $tracingLieu;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTracingPays()
    {
        return $this->tracingPays;
    }

    /**
     * @param mixed $tracingPays
     * @return Tracing
     */
    public function setTracingPays($tracingPays)
    {
        $this->tracingPays = $tracingPays;
        return $this;
    }
}
