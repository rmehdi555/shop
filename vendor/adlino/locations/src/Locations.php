<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/20/2018
 * Time: 10:20 PM
 */

namespace Adlino\Locations;


use Adlino\Locations\Models\City;
use Adlino\Locations\Models\County;
use Adlino\Locations\Models\Province;

class locations
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllProvinces()
    {
        return Province::whereApproved(true)->get();
    }

    /**
     * @return mixed
     */
    public function getAllCounties()
    {
        return County::whereApproved(true)->get();
    }

    /**
     * @return mixed
     */
    public function getAllCities()
    {
        return City::whereApproved(true)->get();
    }
}