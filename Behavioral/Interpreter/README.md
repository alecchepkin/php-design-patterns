###Interpreter

####Type: Behavioral

####What it is:
Given a language, define a representation for its grammar along with an interpreter that uses the representation to interpret sentences in the language.

![alt tag](https://habrastorage.org/getpro/habr/post_images/9f8/d89/5ce/9f8d895cef478a88a9c990802d733f22.jpg)

```php

// "a b c - +";
$expression = new Plus(
    new Variable("a"),
    new Minus(
        new Variable("b"),
        new Variable("c")
    )
);

$context = new Context(["a"=>25, "b"=>6, "c"=>5]);
$result = $expression->interpret($context);
$this->assertEquals(26, $result);

// "d a b c - + -";
$expression = new Minus(
    new Variable("d"),
    new Plus(
        new Variable("a"),
        new Minus(
            new Variable("b"),
            new Variable("c")
        )
    )
);

$context = new Context(["a"=>25, "b"=>6, "c"=>5, "d"=>30]);
$result = $expression->interpret($context);
$this->assertEquals(4, $result);

```
