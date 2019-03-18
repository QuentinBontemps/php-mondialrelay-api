<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 2/02/19
 * Time: 16:26
 */

namespace MondialRelay\Tracing;

class Tracing
{
    private $stat;
    private $libelle01;
    private $libelle02;
    private $tracing;

    /**
     * Tracing constructor.
     * 
     * @param $stat
     * @param $libelle01
     * @param $libelle02
     * @param $tracing
     */
    public function __construct(
        $stat,
        $libelle01,
        $libelle02,
        $tracing
    )
    {
        $this->stat = $stat;
        $this->libelle01 = $libelle01;
        $this->libelle02 = $libelle02;
        $this->tracing = $tracing;
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
}
