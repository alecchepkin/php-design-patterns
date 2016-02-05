<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 11:31
 */

namespace Behavioral\Visitor\Item;


use Behavioral\Visitor\Item;
use Behavioral\Visitor\ItemVisitor;

class Book implements Item
{
    private $name;
    private $price;

    /**
     * Book constructor.
     * @param $name
     * @param $price
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }


    public function accept(ItemVisitor $visitor)
    {
        return $visitor->visitBook($this);
    }
}