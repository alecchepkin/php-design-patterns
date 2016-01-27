<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 27/01/16
 * Time: 11:04
 */

namespace Behavioral\Command\Operation;


use Behavioral\Command\Operation;
use Behavioral\Command\OperationHelper;

class Plus extends Operation
{
    protected function operator()
    {
        return OperationHelper::OPERATOR_PLUS;
    }

}