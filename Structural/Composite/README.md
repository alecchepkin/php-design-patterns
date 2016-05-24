###Composite

####Type: Structural

####What it is:
Convert the interface of a class into another interface clients expect. Lets classes work together that couldn't otherwise because of incompatible interfaces.

![Composite]

```php

$sentence = new Sentence();

$wHello = new Word();
$wHello->add(new Character('H'));
$wHello->add(new Character('e'));
$wHello->add(new Character('l'));
$wHello->add(new Character('l'));
$wHello->add(new Character('o'));

$sentence->add($wHello);

$sentence->add(new Character(','));
$sentence->add(new Character(' '));

$wWorld = new Word();

$wWorld->add(new Character('w'));
$wWorld->add(new Character('o'));
$wWorld->add(new Character('r'));
$wWorld->add(new Character('l'));
$wWorld->add(new Character('d'));

$sentence->add($wWorld);
$sentence->add(new Character('!'));

$this->assertEquals('Hello, world!', $sentence->display());

```
_[ru][Ru Composite]_

[Composite]: https://github.com/olegre/DesignPatterns/blob/master/~images/Composite.png
[Ru Composite]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Composite.png
