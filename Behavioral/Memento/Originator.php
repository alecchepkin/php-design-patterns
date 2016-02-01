<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 13:28
 */

namespace Behavioral\Memento;


class Originator
{
    private $state;

    public function createMemento()
    {
        return new Memento($this->state);
    }

    public function restore(Memento $memento)
    {
        $this->state = $memento->getState();
    }
    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }




}