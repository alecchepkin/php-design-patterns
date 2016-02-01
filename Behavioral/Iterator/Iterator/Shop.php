<?php

/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 29/01/16
 * Time: 15:06
 */

namespace Behavioral\Iterator\Iterator;


use Behavioral\Iterator\Iterator;

class Shop implements Iterator
{
    private $goods = [];
    private $position = 0;

    /**
     * Shop constructor.
     * @param array $goods
     */
    public function __construct(array $goods)
    {
        $this->goods = $goods;
    }


    public function next()
    {
        $good = null;

        if(isset($this->goods[$this->position])){
            $good = $this->goods[$this->position];
            $this->position++;
        }
        return $good;
    }

}