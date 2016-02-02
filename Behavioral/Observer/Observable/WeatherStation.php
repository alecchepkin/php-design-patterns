<?php

/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 13:53
 */

namespace Behavioral\Observer\Observable;


use Behavioral\Observer\Observable;
use Behavioral\Observer\Observer;
use Behavioral\Observer\Observer\WeatherCustomerDelegate;

class WeatherStation implements Observable, WeatherCustomerDelegate
{
    private $temperature;
    private $observers = [];

    /**
     * WeatherStation constructor.
     * @param $observer
     */

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }


    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param float $temperature
     */
    public function setTemperature($temperature)
    {
        $this->temperature = (double)$temperature;
    }

}