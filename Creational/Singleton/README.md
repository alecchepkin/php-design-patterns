###Singleton

####Type: Creational

####What it is:
Ensure a class only has one instance and provide a global point of access to it.


![alt tag](https://habrastorage.org/getpro/habr/post_images/a9d/715/4a9/a9d7154a9b7e321a6330ab0c0337c061.jpg)

```php

$singleton = Singleton::instance();
$singleton2 = Singleton::instance();
$this->assertTrue($singleton===$singleton2);

```
