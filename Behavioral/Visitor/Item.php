<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 05/02/16
 * Time: 11:31
 */

namespace Behavioral\Visitor;


interface Item
{
    public function accept(itemVisitor $visitor);
}