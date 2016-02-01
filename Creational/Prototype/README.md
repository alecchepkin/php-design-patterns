###Prototype

####Type: Creational

####What it is:
Define an interface for creating an object, but let subclasses decide which class to instantiate. Lets a class defer instantiation to subclasses.


![alt tag](https://habrastorage.org/getpro/habr/post_images/a9d/715/4a9/a9d7154a9b7e321a6330ab0c0337c061.jpg)

```php

$prototype = new MySQLBookPrototype();
$clone = clone $prototype;

$this->assertEquals($prototype, $clone);
$this->assertTrue($prototype !== $clone);

```
