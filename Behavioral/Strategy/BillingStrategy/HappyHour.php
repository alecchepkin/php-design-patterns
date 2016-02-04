<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 14:58
 */

namespace Behavioral\Strategy\BillingStrategy;


use Behavioral\Strategy\BillingStrategy;

class HappyHour implements BillingStrategy
{
    public function calc($total)
    {
        return $total * 0.5;
    }

}