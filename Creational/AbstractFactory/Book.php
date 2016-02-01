<?php
/**
 * Created by PhpStorm.
 * User: legr
 * Date: 1/25/16
 * Time: 11:16
 */

namespace Creational\AbstractFactory;


abstract class Book
{
    protected $type;
    protected $name;
    protected $author;
    protected $publisher;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }




}