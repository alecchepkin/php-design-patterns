<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 29/01/16
 * Time: 13:12
 */

namespace Behavioral\Iterator;


class Test extends \PHPUnit_Framework_TestCase
{
    public function testIterator()
    {
        $aggregator = new Aggregator\Shop();
        $iterator = $aggregator->createIterator();

        $this->assertEquals(1, $iterator->next());
        $this->assertEquals(2, $iterator->next());
        $this->assertEquals(3, $iterator->next());
        $this->assertEquals(null, $iterator->next());
    }
}
