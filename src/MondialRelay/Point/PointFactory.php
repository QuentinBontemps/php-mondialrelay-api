<?php

namespace MondialRelay\Point;

use MondialRelay\BussinessHours\BussinessHoursFactory;

/**
 * Created by PhpStorm.
 * User: albertclaret
 * Date: 14/06/17
 * Time: 09:27
 */
class PointFactory
{

    public function create($response)
    {
        $bussines_hours = (new BussinessHoursFactory())->create($response);

        return new Point(
            $response->Num,
            str_replace(",", ".", $response->Latitude),
            str_replace(",", ".", $response->Longitude),
            $response->CP,
            $this->extractAddress($response),
            $response->Ville,
            $response->Pays,
            $this->extractLocalisation($response),
            $response->TypeActivite,
            $response->Information,
            $bussines_hours
        );
    }

    protected function extractAddress($response)
    {
        $address = [];
        $attributes = [
            'LgAdr1',
            'LgAdr2',
            'LgAdr3',
            'LgAdr4',
        ];

        foreach ($attributes as $attribute)
        {
            if (property_exists($response, $attribute))
            {
                $address[] = trim($response->{$attribute});
            }
        }

        return $address;
    }

    protected function extractLocalisation($response)
    {
        $localisation = [];
        $attributes = [
            'Localisation1',
            'Localisation2',
        ];

        foreach ($attributes as $attribute)
        {
            if (property_exists($response, $attribute))
            {
                $localisation[] = trim($response->{$attribute});
            }
        }

        return $localisation;
    }
}
