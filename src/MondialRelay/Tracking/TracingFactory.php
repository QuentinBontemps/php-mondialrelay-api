<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 2/02/19
 * Time: 16:26
 */

class TracingFactory
{
    /**
     * @param $stat
     * @param $libelle01
     * @param $libelle02
     * @param $tracing
     * @param $tracingLibelle
     * @param $tracingDate
     * @param $tracingHeure
     * @param $tracingLieu
     * @param $tracingPays
     *
     * @return Tracing
     */
    public function create(
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
        return new Tracing(
            $stat,
            $libelle01,
            $libelle02,
            $tracing,
            $tracingLibelle,
            $tracingDate,
            $tracingHeure,
            $tracingLieu,
            $tracingPays
        );
    }
}
