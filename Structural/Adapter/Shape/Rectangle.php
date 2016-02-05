<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 12:57
 */

namespace Structural\Adapter\Shape;


use Structural\Adapter\RectangleLegacy;
use Structural\Adapter\Shape;

/**
 * Class Rectangle
 * @package Structural\Adapter\Shape
 */
class Rectangle implements Shape
{
    /**
     * @var RectangleLegacy
     */
    private $adaptee;

    /**
     * Rectangle constructor.
     */
    public function __construct(RectangleLegacy $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @param $x1
     * @param $y1
     * @param $x2
     * @param $y2
     * @return bool
     */
    public function display($x1, $y1, $x2, $y2)
    {
        $w = $x2 - $x1;
        $h = $y2 - $y1;

        return $this->adaptee->display($x1, $y1, $w, $h);
    }

}