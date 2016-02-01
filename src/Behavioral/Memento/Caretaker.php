<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 13:38
 */

namespace Behavioral\Memento;


class Caretaker
{
    private $memento;

    /**
     * @param mixed $memento
     */
    public function setMemento(Memento $memento)
    {
        $this->memento = $memento;
    }

    /**
     * @return mixed
     */
    public function getMemento()
    {
        return $this->memento;
    }


}