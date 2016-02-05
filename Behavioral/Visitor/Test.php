<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 10:45
 */

namespace Behavioral\Visitor;

use Behavioral\Visitor\Item\Book as BookItem;
use Behavioral\Visitor\Item\Fruit as FruitItem;
use Behavioral\Visitor\ItemVisitor\Price as PriceItemVisitor;

class Test extends \PHPUnit_Framework_TestCase
{
    public function testVisitor()
    {
        $visitor  = new PriceItemVisitor();
        $item = new BookItem($name = "Im Westen nichts Neues, Erich Maria Remarque", $price = 22.50);
        $price = $item->accept($visitor);
        $this->assertEquals(17.5, $price);

        $item = new FruitItem($name = "apple", $pricePerKg = 1.5, $weight = 2);
        $price = $item->accept($visitor);
        $this->assertEquals(3.0, $price);
    }
}
