<?php

namespace Creational\AbstractFactory;

abstract class BookFactory
{

    abstract public function createPHPBook();
    abstract public function createMySQLBook();

}