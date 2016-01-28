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

class Variable implements Expression
{
    private $name;

    /**
     * Variable constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function interpret(Context $context)
    {
        return $context->getByName($this->name);
    }
}