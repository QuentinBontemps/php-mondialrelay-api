<?php
/**
 * Created by PhpStorm.
 * User: joffrey
 * Date: 2/02/19
 * Time: 16:26
 */

namespace MondialRelay\Tracing;

class TracingFactory
{
    /**
     * @param $stat
     * @param $libelle01
     * @param $libelle02
     * @param $tracing
     *
     * @return Tracing
     */
    public function create(
        $stat,
        $libelle01, 
        $libelle02, 
        $tracing
    )
    {
        return new Tracing(
            $stat,
            $libelle01,
            $libelle02,
            $tracing
        );
    }
}
