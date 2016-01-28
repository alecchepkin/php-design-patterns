<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 28/01/16
 * Time: 13:18
 */

namespace Behavioral\Interpreter;


class Context
{
    private $variables = [];

    /**
     * Context constructor.
     * @param array $variables
     */
    public function __construct(array $variables)
    {
        $this->variables = $variables;
    }


    public function getByName($name)
    {
        return isset($this->variables[$name]) ? $this->variables[$name]: null;
    }
}