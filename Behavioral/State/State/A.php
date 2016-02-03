<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 13:29
 */

namespace Behavioral\State\State;


use Behavioral\State\Context;
use Behavioral\State\State;

class A implements State
{
    public function handle(Context $context)
    {
        $context->setState(new B());
    }

}