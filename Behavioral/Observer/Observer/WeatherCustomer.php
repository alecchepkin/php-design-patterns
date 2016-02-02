<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 15:23
 */

namespace Behavioral\Observer\Observer;


use Behavioral\Observer\Observable;
use Behavioral\Observer\Observer;

class WeatherCustomer implements Observer
{
    private $temperature;


    public function update(Observable $observable)
    {
        $this->temperature = (double)$observable->getTemperature();
    }

    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

}