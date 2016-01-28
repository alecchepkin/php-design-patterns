<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 28/01/16
 * Time: 13:22
 */

namespace Behavioral\Interpreter\Expression;


use Behavioral\Interpreter\Expression;

use Behavioral\Interpreter\Context;

class Plus implements Expression
{
    private $operandLeft;
    private $operandRight;

    /**
     * Plus constructor.
     * @param $operandLeft
     * @param $operandRight
     */
    public function __construct(Expression $operandLeft, Expression $operandRight)
    {
        $this->operandLeft = $operandLeft;
        $this->operandRight = $operandRight;
    }

    public function interpret(Context $context)
    {
        return $this->operandLeft->interpret($context) + $this->operandRight->interpret($context);
    }
}