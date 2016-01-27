<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 27/01/16
 * Time: 10:44
 */

namespace Behavioral\Command;


abstract class Operation
{
    protected $calculator;
    protected $operand;

    abstract protected function operator();


    /**
     * Operation constructor.
     * @param $calculator
     * @param $operand
     */
    public function __construct(Calculator $calculator, $operand)
    {
        $this->calculator = $calculator;
        $this->operand = $operand;
    }

    public function execute()
    {
        $this->calculator->operate($this->operator(), $this->operand);
    }
}