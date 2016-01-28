<?php

/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 28/01/16
 * Time: 13:14
 */

namespace Behavioral\Interpreter;


interface Expression
{
    public function interpret(Context $context);
}