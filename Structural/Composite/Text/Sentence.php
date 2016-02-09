<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 09/02/16
 * Time: 12:09
 */

namespace Structural\Composite\Text;


use Structural\Composite\Text;

class Sentence implements Text
{
    protected $items = [];


    public function add(Text $text)
    {
        $this->items[] = $text;
    }

    public function display()
    {
        $text = '';

        foreach($this->items as $item){
            $text.=$item->display();
        }

        return $text;
    }
}