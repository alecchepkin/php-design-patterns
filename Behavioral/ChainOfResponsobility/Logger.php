<?php
/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 26/01/16
 * Time: 14:58
 */

namespace Behavioral\ChainOfResponsobility;


abstract class Logger
{
    protected $priority;
    protected $next;

    abstract public function writeMessage($message);

    /**
     * Logger constructor.
     * @param $next
     * @param $priority
     */
    public function __construct($priority, Logger $next = null)
    {
        $this->next = $next;
        $this->priority = $priority;
    }


    public function message($message, $priority)
    {
        if($this->priority <= $priority) {
            $this->writeMessage($message);
        }

        if ($this->next) {
            $this->next->message($message, $priority);
        }
    }
}