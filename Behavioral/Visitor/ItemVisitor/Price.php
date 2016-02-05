<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 11:46
 */

namespace Behavioral\Visitor\ItemVisitor;


use Behavioral\Visitor\Item\Book;
use Behavioral\Visitor\Item\Fruit;
use Behavioral\Visitor\ItemVisitor;

class Price implements ItemVisitor
{
    public function visitBook(Book $book)
    {
        $price = $book->getPrice();

        // implement $5 discount
        if($price > 20){
            $price -= 5;
        }
        return $price;
    }

    public function visitFruit(Fruit $fruit)
    {
        return $fruit->getPricePerKg() * $fruit->getWeight();
    }

}