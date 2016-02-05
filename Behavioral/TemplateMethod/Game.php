<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 09:50
 */

namespace Behavioral\TemplateMethod;


abstract class Game
{
    public function play()
    {
        $this->init();
        $this->start();
        $this->end();

        return true;
    }

    abstract protected function init();
    abstract protected function start();
    abstract protected function end();

}