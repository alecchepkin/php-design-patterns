<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 27/01/16
 * Time: 11:09
 */

namespace Behavioral\Command;


class Calculator
{
    private $result = 0;

    public function operate($operation, $operand)
    {
        switch ($operation){
            case OperationHelper::OPERATOR_PLUS:
                $this->result += $operand;
                break;
            case OperationHelper::OPERATOR_MINUS:
                $this->result -= $operand;
                break;
            case OperationHelper::OPERATOR_MULTIPLICATION:
                $this->result *= $operand;
                break;
            case OperationHelper::OPERATOR_DIVISION:
                $this->result /= $operand;
                break;
        }
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }


}