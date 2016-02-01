###Chain of Responsibility

####Type: Behavioral

####What it is:
Avoid coupling the sender of a request to its receiver by giving more than one object a chance to handle the request. Chain the receiving objects and pass the request along the chain until an object handles it.

![alt tag](https://habrastorage.org/getpro/habr/post_images/ec8/3ef/362/ec83ef3621e0dbe56bed96e3c272e3ff.jpg)

```php

$loger1 = new Logger\Email(LoggerHelper::PRIORITY_ERROR);
$loger2 = new Logger\File(LoggerHelper::PRIORITY_NOTICE, $loger1);
$loger = new Logger\Profiling(LoggerHelper::PRIORITY_DEBUG, $loger2);

$loger->message('Start profiling module1', LoggerHelper::PRIORITY_DEBUG);
$loger->message('Access denied for User1', LoggerHelper::PRIORITY_NOTICE);
$loger->message('Roll back the transaction', LoggerHelper::PRIORITY_ERROR);

```
