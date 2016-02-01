<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 13:57
 */

namespace Creational\Builder;


abstract class Builder
{
    protected $product;

    abstract public function buildName();
    abstract public function buildPrice();

    public function createProduct()
    {
        $this->product = new Product();
    }

    public function getProduct()
    {
        return $this->product;
    }
}