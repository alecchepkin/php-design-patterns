<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 14:50
 */

namespace Behavioral\Strategy;


interface BillingStrategy
{
    public function calc($total);
}