<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 13:34
 */

namespace Behavioral\Memento;


class Memento
{
    private $state;

    /**
     * Memento constructor.
     * @param $state
     */
    public function __construct($state)
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