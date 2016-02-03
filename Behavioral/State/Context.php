<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 03/02/16
 * Time: 13:23
 */

namespace Behavioral\State;


class Context
{
    private $state;

    /**
     * Context constructor.
     * @param $state
     */
    public function __construct(State $state)
    {
        $this->state = $state;
    }

    public function request()
    {
        $this->state->handle($this);
    }

    /**
     * @return State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param State $state
     */
    public function setState(State $state)
    {
        $this->state = $state;
    }


}