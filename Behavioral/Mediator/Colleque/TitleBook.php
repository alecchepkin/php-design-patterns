<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 11:32
 */

namespace Behavioral\Mediator\Colleque;


use Behavioral\Mediator\Colleaque;

class TitleBook extends Colleaque
{

    public function change(array $params)
    {
        foreach($params as $key=>$value){
            if($key = "title"){
                $this->name = $value;
            }
        }
    }

}