<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 13:28
 */

namespace Behavioral\State;


interface State
{
    public function handle(Context $context);
}