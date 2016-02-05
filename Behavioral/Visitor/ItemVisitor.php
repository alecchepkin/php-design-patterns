<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 11:32
 */

namespace Behavioral\Visitor;


use Behavioral\Visitor\Item\Book;
use Behavioral\Visitor\Item\Fruit;

interface ItemVisitor
{
    public function visitBook(Book $book);
    public function visitFruit(Fruit $fruit);
}