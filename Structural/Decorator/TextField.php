<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 12:59
 */

namespace Structural\Decorator;


class TextField implements Widget
{
    private $width;
    private $height;

    /**
     * TextField constructor.
     * @param $height
     * @param $width
     */
    public function __construct($height, $width)
    {
        $this->height = (int)$height;
        $this->width = (int)$width;
    }

    public function draw()
    {
        printf("Draw Text Field[width:%d, height:%d]\n", $this->width, $this->height);
        return true;
    }

}