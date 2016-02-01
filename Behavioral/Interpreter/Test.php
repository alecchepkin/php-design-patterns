<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 28/01/16
 * Time: 12:49
 */

namespace Behavioral\Interpreter;

use Behavioral\Interpreter\Expression\Plus;
use Behavioral\Interpreter\Expression\Minus;
use Behavioral\Interpreter\Expression\Variable;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testInterpreter()
    {
        // "a b c - +";
        $expression = new Plus(
            new Variable("a"),
            new Minus(
                new Variable("b"),
                new Variable("c")
            )
        );

        $context = new Context(["a"=>25, "b"=>6, "c"=>5]);
        $result = $expression->interpret($context);
        $this->assertEquals(26, $result);

        // "d a b c - + -";
        $expression = new Minus(
            new Variable("d"),
            new Plus(
                new Variable("a"),
                new Minus(
                    new Variable("b"),
                    new Variable("c")
                )
            )
        );

        $context = new Context(["a"=>25, "b"=>6, "c"=>5, "d"=>30]);
        $result = $expression->interpret($context);
        $this->assertEquals(4, $result);
    }
}
