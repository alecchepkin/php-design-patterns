<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 29/01/16
 * Time: 14:52
 */

namespace Behavioral\Iterator;


interface Aggregator
{
    public function createIterator();
}