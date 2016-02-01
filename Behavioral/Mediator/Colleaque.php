<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 11:31
 */

namespace Behavioral\Mediator;


abstract class Colleaque
{
    protected $mediator;
    protected $name;

    abstract public function change(array $params);

    /**
     * Colleque constructor.
     * @param $mediator
     */

    public function __construct(Mediator $mediator, $name)
    {
        $this->mediator = $mediator;
        $this->name = (string)$name;
    }

    public function getName(){
        return (string)$this->name;
    }

}