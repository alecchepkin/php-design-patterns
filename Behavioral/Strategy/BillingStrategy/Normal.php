<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 14:58
 */

namespace Behavioral\Strategy\BillingStrategy;


use Behavioral\Strategy\BillingStrategy;

class Normal implements BillingStrategy
{
    public function calc($total)
    {
        return $total;
    }

}