<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 14:22
 */

namespace Creational\Builder;


class Manager
{
    private $builder;

    /**
     * Manager constructor.
     * @param $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function buildProduct()
    {
        $this->builder->createProduct();
        $this->builder->buildName();
        $this->builder->buildPrice();
    }

    public function getProduct()
    {
        return $this->builder->getProduct();
    }


}