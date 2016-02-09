<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 11:55
 */

namespace Structural\Composite;


interface Text
{
    public function add(Text $text);
    public function display();

}