<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 12:58
 */

namespace Structural\Decorator;


abstract class Decorator implements Widget
{
    protected $widget;

    /**
     * Decorator constructor.
     * @param $widget
     */
    public function __construct(Widget $widget)
    {
        $this->widget = $widget;
    }

    public function draw()
    {
        return $this->widget->draw();
    }
}