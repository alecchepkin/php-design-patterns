<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\Strategy;

use Behavioral\Strategy\BillingStrategy\Normal as NormalBillingStrategy;
use Behavioral\Strategy\BillingStrategy\HappyHour as HappyHourBillingStrategy;


class Test extends \PHPUnit_Framework_TestCase
{
    public function testStrategy()
    {

        $customer = new Customer(new NormalBillingStrategy);
        $customer->addToBilling($price=2.5, $quantity=2);
        $this->assertEquals(5.0, $customer->sumOfBilling());

        $customer->setStrategy(new HappyHourBillingStrategy);
        $customer->addToBilling($price=2.5, $quantity=4);
        $this->assertEquals(10.0, $customer->sumOfBilling());

    }
}
