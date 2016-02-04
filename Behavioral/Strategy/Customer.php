<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 14:50
 */

namespace Behavioral\Strategy;


class Customer
{
    private $billingStrategy;


    private $billing = [];

    /**
     * Customer constructor.
     * @param $billingStrategy
     */
    public function __construct(BillingStrategy $billingStrategy)
    {
        $this->billingStrategy = $billingStrategy;
    }

    public function addToBilling($price, $quantity)
    {
        $this->billing[] = $this->billingStrategy->calc($price * $quantity);
    }

    public function sumOfBilling()
    {
        return array_sum($this->billing);
    }

    /**
     * @param BillingStrategy $billingStrategy
     */
    public function setStrategy(BillingStrategy $billingStrategy)
    {
        $this->billingStrategy = $billingStrategy;
    }


}