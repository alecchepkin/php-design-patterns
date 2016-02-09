<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 12:09
 */

namespace Structural\Composite\Text;


use Structural\Composite\Text;

class Character implements Text
{
    private $name;

    /**
     * Character constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function add(Text $text)
    {
        throw new \Exception("I can't append child to myself");
    }

    public function display()
    {
        return $this->name;
    }
}