<?php

/**
 * Created by PhpStorm.
 * User: olegchepkin
 * Date: 01/02/16
 * Time: 11:17
 */

namespace Behavioral\Mediator\Mediator;


use Behavioral\Mediator\Mediator;
use Behavioral\Mediator\Colleque\AuthorBook as AuthorBookColleaque;
use Behavioral\Mediator\Colleque\TitleBook as TitleBookColleaque;
class Book extends Mediator
{
    private $title;
    private $author;

    /**
     * Book constructor.
     * @param $author
     * @param $title
     */
    public function __construct($title, $author)
    {
        $this->title = new TitleBookColleaque($mediator = $this, $name = $title);
        $this->author = new AuthorBookColleaque($mediator = $this, $name = $author);
    }

    /**
     * @return AuthorBookColleaque
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param AuthorBookColleaque $author
     */
    public function setAuthor($authorName)
    {
        $this->title = $this->author->change(["author"=>(string)$authorName]);
    }

    /**
     * @return TitleBookColleaque
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param TitleBookColleaque $title
     */
    public function setTitle($titleName)
    {
        $this->title = $this->title->change(["title"=>(string)$titleName]);
    }




}