<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 02/02/16
 * Time: 11:33
 */

namespace Behavioral\Observer;


interface Observer
{
    public function update(Observable $observable);
}