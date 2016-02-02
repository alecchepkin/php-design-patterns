<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 15:55
 */

namespace Behavioral\Observer\Observer;


interface WeatherCustomerDelegate
{
    public function getTemperature();
}