--TEST--
class with one generic type used as property
--FILE--
<?php

class Foo<T>
{
    public T $one;
    public T $two;
}

$fooInt = new (Foo<int>)();
$fooInt->one = '1';
$fooInt->two = 2;
var_dump($fooInt);

$fooString = new (Foo<string>)();
$fooString->one = '1';
$fooString->two = 2;
var_dump($fooString);

?>
--EXPECT--
