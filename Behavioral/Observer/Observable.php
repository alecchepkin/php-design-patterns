<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 12:56
 */

namespace Behavioral\Observer;


interface Observable
{
    public function attach(Observer $observer);

    public function notify();
}