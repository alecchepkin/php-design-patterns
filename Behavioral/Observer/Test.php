<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\Observer;

use Behavioral\Observer\Observable\WeatherStation as WeatherStationObservable;
use Behavioral\Observer\Observer\WeatherCustomer as WeatherCustomerObserver;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testObserver()
    {
        $station = new WeatherStationObservable();
        $station->setTemperature(15);
        $this->assertEquals(15, $station->getTemperature());

        $customer1 = new WeatherCustomerObserver();
        $customer2 = new WeatherCustomerObserver();

        $station->attach($customer1);
        $station->attach($customer2);

        $this->assertEquals(null, $customer1->getTemperature());
        $this->assertEquals(null, $customer2->getTemperature());

        $station->setTemperature(26);
        $station->notify();

        $this->assertEquals(26, $station->getTemperature());
        $this->assertEquals(26, $customer1->getTemperature());
        $this->assertEquals(26, $customer2->getTemperature());

        $station->setTemperature(10);
        $station->notify();

        $this->assertEquals(10, $station->getTemperature());
        $this->assertEquals(10, $customer1->getTemperature());
        $this->assertEquals(10, $customer2->getTemperature());

    }
}
