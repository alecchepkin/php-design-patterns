<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 15:46
 */

namespace Structural\Bridge;


abstract class Color
{
    abstract protected function code();

    public function applyColor(){
        return $this->code();
    }
}