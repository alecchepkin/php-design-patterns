<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 15:42
 */

namespace Structural\Bridge;


abstract class Shape
{
    protected $color;

    /**
     * Shape constructor.
     * @param $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function applyColor();
}