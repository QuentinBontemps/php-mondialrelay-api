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
            property_exists($response, 'TypeActivite') ? $response->TypeActivite : null,
            property_exists($response, 'Information') ? $response->Information : null,
            $bussines_hours,
            property_exists($response, 'URL_Photo') ? $response->URL_Photo : null,
            property_exists($response, 'URL_Plan') ? $response->URL_Plan : null,
            property_exists($response, 'Distance') ? $response->Distance : null
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
