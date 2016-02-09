###Flyweight

####Type: Structural

####What it is:
Use sharing to support large numbers of fine grained objects efficiently.

![Flyweight]

```php

$factory = new CharacterFactoryFlyweight();
$character1 = $factory->findCharacter('A');
$character2 = $factory->findCharacter('A');
$character3 = $factory->findCharacter('B');

$this->assertInstanceOf('Structural\Flyweight\Character', $character1);
$this->assertInstanceOf('Structural\Flyweight\Character', $character2);
$this->assertInstanceOf('Structural\Flyweight\Character', $character3);

$this->assertTrue($character1 === $character2);
$this->assertFalse($character1 === $character3);

```
_[ru][Ru Flyweight]_

[Flyweight]: https://github.com/olegre/DesignPatterns/blob/master/~images/Flyweight.png
[Ru Flyweight]: https://github.com/olegre/DesignPatterns/blob/master/~images/ru/Flyweight.png
