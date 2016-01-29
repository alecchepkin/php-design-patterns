<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 29/01/16
 * Time: 15:00
 */

namespace Behavioral\Iterator\Aggregator;


use Behavioral\Iterator\Aggregator;

class Shop implements Aggregator
{
    private $goods = [];

    /**
     * Shop constructor.
     */
    public function __construct()
    {
        $this->goods = [1, 2, 3];
    }

    public function createIterator()
    {
        return new \Behavioral\Iterator\Iterator\Shop($this->goods);
    }

}