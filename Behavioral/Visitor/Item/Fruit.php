<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 11:31
 */

namespace Behavioral\Visitor\Item;


use Behavioral\Visitor\Item;
use Behavioral\Visitor\itemVisitor;

class Fruit implements Item
{
    private $name;
    private $pricePerKg;
    private $weight;

    /**
     * Fruit constructor.
     * @param $name
     * @param $pricePerKg
     * @param $weight
     */
    public function __construct($name, $pricePerKg, $weight)
    {
        $this->name = $name;
        $this->pricePerKg = $pricePerKg;
        $this->weight = $weight;
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
    public function getPricePerKg()
    {
        return $this->pricePerKg;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }


    public function accept(itemVisitor $visitor)
    {
        return $visitor->visitFruit($this);
    }




}