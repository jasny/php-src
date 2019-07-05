--TEST--
less than '<' operator
--FILE--
<?php
require_once __DIR__ . '/../_helper.inc';

set_error_handler('error_to_exception');

test_two_operands('$a < $b', function($a, $b) { return $a < $b; });

--EXPECT--
false < false = false
false < true = true
false < 0 = false
false < 10 = true
false < 0.0 = false
false < 10.0 = true
false < 3.14 = true
false < '0' = false
false < '10' = true
false < '010' = true
false < '10 elephants' = true
false < 'foo' = true
false < array ( ) = false
false < array ( 0 => 1 ) = true
false < array ( 0 => 1, 1 => 100 ) = true
false < array ( 'foo' => 1, 'bar' => 2 ) = true
false < array ( 'bar' => 1, 'foo' => 2 ) = true
false < (object) array ( ) = true
false < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
false < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
false < DateTime = true
false < resource = true
false < NULL = false
true < false = false
true < true = false
true < 0 = false
true < 10 = false
true < 0.0 = false
true < 10.0 = false
true < 3.14 = false
true < '0' = false
true < '10' = false
true < '010' = false
true < '10 elephants' = false
true < 'foo' = false
true < array ( ) = false
true < array ( 0 => 1 ) = false
true < array ( 0 => 1, 1 => 100 ) = false
true < array ( 'foo' => 1, 'bar' => 2 ) = false
true < array ( 'bar' => 1, 'foo' => 2 ) = false
true < (object) array ( ) = false
true < (object) array ( 'foo' => 1, 'bar' => 2 ) = false
true < (object) array ( 'bar' => 1, 'foo' => 2 ) = false
true < DateTime = false
true < resource = false
true < NULL = false
0 < false = false
0 < true = true
0 < 0 = false
0 < 10 = true
0 < 0.0 = false
0 < 10.0 = true
0 < 3.14 = true
0 < '0' = false
0 < '10' = true
0 < '010' = true
0 < '10 elephants' = true
0 < 'foo' = false
0 < array ( ) = true
0 < array ( 0 => 1 ) = true
0 < array ( 0 => 1, 1 => 100 ) = true
0 < array ( 'foo' => 1, 'bar' => 2 ) = true
0 < array ( 'bar' => 1, 'foo' => 2 ) = true
0 < (object) array ( ) = true - Notice Object of class stdClass could not be converted to int
0 < (object) array ( 'foo' => 1, 'bar' => 2 ) = true - Notice Object of class stdClass could not be converted to int
0 < (object) array ( 'bar' => 1, 'foo' => 2 ) = true - Notice Object of class stdClass could not be converted to int
0 < DateTime = true - Notice Object of class DateTime could not be converted to int
0 < resource = true
0 < NULL = false
10 < false = false
10 < true = false
10 < 0 = false
10 < 10 = false
10 < 0.0 = false
10 < 10.0 = false
10 < 3.14 = false
10 < '0' = false
10 < '10' = false
10 < '010' = false
10 < '10 elephants' = false
10 < 'foo' = false
10 < array ( ) = true
10 < array ( 0 => 1 ) = true
10 < array ( 0 => 1, 1 => 100 ) = true
10 < array ( 'foo' => 1, 'bar' => 2 ) = true
10 < array ( 'bar' => 1, 'foo' => 2 ) = true
10 < (object) array ( ) = false - Notice Object of class stdClass could not be converted to int
10 < (object) array ( 'foo' => 1, 'bar' => 2 ) = false - Notice Object of class stdClass could not be converted to int
10 < (object) array ( 'bar' => 1, 'foo' => 2 ) = false - Notice Object of class stdClass could not be converted to int
10 < DateTime = false - Notice Object of class DateTime could not be converted to int
10 < resource = false
10 < NULL = false
0.0 < false = false
0.0 < true = true
0.0 < 0 = false
0.0 < 10 = true
0.0 < 0.0 = false
0.0 < 10.0 = true
0.0 < 3.14 = true
0.0 < '0' = false
0.0 < '10' = true
0.0 < '010' = true
0.0 < '10 elephants' = true
0.0 < 'foo' = false
0.0 < array ( ) = true
0.0 < array ( 0 => 1 ) = true
0.0 < array ( 0 => 1, 1 => 100 ) = true
0.0 < array ( 'foo' => 1, 'bar' => 2 ) = true
0.0 < array ( 'bar' => 1, 'foo' => 2 ) = true
0.0 < (object) array ( ) = true - Notice Object of class stdClass could not be converted to float
0.0 < (object) array ( 'foo' => 1, 'bar' => 2 ) = true - Notice Object of class stdClass could not be converted to float
0.0 < (object) array ( 'bar' => 1, 'foo' => 2 ) = true - Notice Object of class stdClass could not be converted to float
0.0 < DateTime = true - Notice Object of class DateTime could not be converted to float
0.0 < resource = true
0.0 < NULL = false
10.0 < false = false
10.0 < true = false
10.0 < 0 = false
10.0 < 10 = false
10.0 < 0.0 = false
10.0 < 10.0 = false
10.0 < 3.14 = false
10.0 < '0' = false
10.0 < '10' = false
10.0 < '010' = false
10.0 < '10 elephants' = false
10.0 < 'foo' = false
10.0 < array ( ) = true
10.0 < array ( 0 => 1 ) = true
10.0 < array ( 0 => 1, 1 => 100 ) = true
10.0 < array ( 'foo' => 1, 'bar' => 2 ) = true
10.0 < array ( 'bar' => 1, 'foo' => 2 ) = true
10.0 < (object) array ( ) = false - Notice Object of class stdClass could not be converted to float
10.0 < (object) array ( 'foo' => 1, 'bar' => 2 ) = false - Notice Object of class stdClass could not be converted to float
10.0 < (object) array ( 'bar' => 1, 'foo' => 2 ) = false - Notice Object of class stdClass could not be converted to float
10.0 < DateTime = false - Notice Object of class DateTime could not be converted to float
10.0 < resource = false
10.0 < NULL = false
3.14 < false = false
3.14 < true = false
3.14 < 0 = false
3.14 < 10 = true
3.14 < 0.0 = false
3.14 < 10.0 = true
3.14 < 3.14 = false
3.14 < '0' = false
3.14 < '10' = true
3.14 < '010' = true
3.14 < '10 elephants' = true
3.14 < 'foo' = false
3.14 < array ( ) = true
3.14 < array ( 0 => 1 ) = true
3.14 < array ( 0 => 1, 1 => 100 ) = true
3.14 < array ( 'foo' => 1, 'bar' => 2 ) = true
3.14 < array ( 'bar' => 1, 'foo' => 2 ) = true
3.14 < (object) array ( ) = false - Notice Object of class stdClass could not be converted to float
3.14 < (object) array ( 'foo' => 1, 'bar' => 2 ) = false - Notice Object of class stdClass could not be converted to float
3.14 < (object) array ( 'bar' => 1, 'foo' => 2 ) = false - Notice Object of class stdClass could not be converted to float
3.14 < DateTime = false - Notice Object of class DateTime could not be converted to float
3.14 < resource = true
3.14 < NULL = false
'0' < false = false
'0' < true = true
'0' < 0 = false
'0' < 10 = true
'0' < 0.0 = false
'0' < 10.0 = true
'0' < 3.14 = true
'0' < '0' = false
'0' < '10' = true
'0' < '010' = true
'0' < '10 elephants' = true
'0' < 'foo' = true
'0' < array ( ) = true
'0' < array ( 0 => 1 ) = true
'0' < array ( 0 => 1, 1 => 100 ) = true
'0' < array ( 'foo' => 1, 'bar' => 2 ) = true
'0' < array ( 'bar' => 1, 'foo' => 2 ) = true
'0' < (object) array ( ) = true
'0' < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'0' < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'0' < DateTime = true
'0' < resource = true
'0' < NULL = false
'10' < false = false
'10' < true = false
'10' < 0 = false
'10' < 10 = false
'10' < 0.0 = false
'10' < 10.0 = false
'10' < 3.14 = false
'10' < '0' = false
'10' < '10' = false
'10' < '010' = false
'10' < '10 elephants' = true
'10' < 'foo' = true
'10' < array ( ) = true
'10' < array ( 0 => 1 ) = true
'10' < array ( 0 => 1, 1 => 100 ) = true
'10' < array ( 'foo' => 1, 'bar' => 2 ) = true
'10' < array ( 'bar' => 1, 'foo' => 2 ) = true
'10' < (object) array ( ) = true
'10' < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'10' < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'10' < DateTime = true
'10' < resource = false
'10' < NULL = false
'010' < false = false
'010' < true = false
'010' < 0 = false
'010' < 10 = false
'010' < 0.0 = false
'010' < 10.0 = false
'010' < 3.14 = false
'010' < '0' = false
'010' < '10' = false
'010' < '010' = false
'010' < '10 elephants' = true
'010' < 'foo' = true
'010' < array ( ) = true
'010' < array ( 0 => 1 ) = true
'010' < array ( 0 => 1, 1 => 100 ) = true
'010' < array ( 'foo' => 1, 'bar' => 2 ) = true
'010' < array ( 'bar' => 1, 'foo' => 2 ) = true
'010' < (object) array ( ) = true
'010' < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'010' < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'010' < DateTime = true
'010' < resource = false
'010' < NULL = false
'10 elephants' < false = false
'10 elephants' < true = false
'10 elephants' < 0 = false
'10 elephants' < 10 = false
'10 elephants' < 0.0 = false
'10 elephants' < 10.0 = false
'10 elephants' < 3.14 = false
'10 elephants' < '0' = false
'10 elephants' < '10' = false
'10 elephants' < '010' = false
'10 elephants' < '10 elephants' = false
'10 elephants' < 'foo' = true
'10 elephants' < array ( ) = true
'10 elephants' < array ( 0 => 1 ) = true
'10 elephants' < array ( 0 => 1, 1 => 100 ) = true
'10 elephants' < array ( 'foo' => 1, 'bar' => 2 ) = true
'10 elephants' < array ( 'bar' => 1, 'foo' => 2 ) = true
'10 elephants' < (object) array ( ) = true
'10 elephants' < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'10 elephants' < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'10 elephants' < DateTime = true
'10 elephants' < resource = false
'10 elephants' < NULL = false
'foo' < false = false
'foo' < true = false
'foo' < 0 = false
'foo' < 10 = true
'foo' < 0.0 = false
'foo' < 10.0 = true
'foo' < 3.14 = true
'foo' < '0' = false
'foo' < '10' = false
'foo' < '010' = false
'foo' < '10 elephants' = false
'foo' < 'foo' = false
'foo' < array ( ) = true
'foo' < array ( 0 => 1 ) = true
'foo' < array ( 0 => 1, 1 => 100 ) = true
'foo' < array ( 'foo' => 1, 'bar' => 2 ) = true
'foo' < array ( 'bar' => 1, 'foo' => 2 ) = true
'foo' < (object) array ( ) = true
'foo' < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'foo' < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'foo' < DateTime = true
'foo' < resource = true
'foo' < NULL = false
array ( ) < false = false
array ( ) < true = true
array ( ) < 0 = false
array ( ) < 10 = false
array ( ) < 0.0 = false
array ( ) < 10.0 = false
array ( ) < 3.14 = false
array ( ) < '0' = false
array ( ) < '10' = false
array ( ) < '010' = false
array ( ) < '10 elephants' = false
array ( ) < 'foo' = false
array ( ) < array ( ) = false
array ( ) < array ( 0 => 1 ) = true
array ( ) < array ( 0 => 1, 1 => 100 ) = true
array ( ) < array ( 'foo' => 1, 'bar' => 2 ) = true
array ( ) < array ( 'bar' => 1, 'foo' => 2 ) = true
array ( ) < (object) array ( ) = true
array ( ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( ) < DateTime = true
array ( ) < resource = false
array ( ) < NULL = false
array ( 0 => 1 ) < false = false
array ( 0 => 1 ) < true = false
array ( 0 => 1 ) < 0 = false
array ( 0 => 1 ) < 10 = false
array ( 0 => 1 ) < 0.0 = false
array ( 0 => 1 ) < 10.0 = false
array ( 0 => 1 ) < 3.14 = false
array ( 0 => 1 ) < '0' = false
array ( 0 => 1 ) < '10' = false
array ( 0 => 1 ) < '010' = false
array ( 0 => 1 ) < '10 elephants' = false
array ( 0 => 1 ) < 'foo' = false
array ( 0 => 1 ) < array ( ) = false
array ( 0 => 1 ) < array ( 0 => 1 ) = false
array ( 0 => 1 ) < array ( 0 => 1, 1 => 100 ) = true
array ( 0 => 1 ) < array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1 ) < array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1 ) < (object) array ( ) = true
array ( 0 => 1 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1 ) < DateTime = true
array ( 0 => 1 ) < resource = false
array ( 0 => 1 ) < NULL = false
array ( 0 => 1, 1 => 100 ) < false = false
array ( 0 => 1, 1 => 100 ) < true = false
array ( 0 => 1, 1 => 100 ) < 0 = false
array ( 0 => 1, 1 => 100 ) < 10 = false
array ( 0 => 1, 1 => 100 ) < 0.0 = false
array ( 0 => 1, 1 => 100 ) < 10.0 = false
array ( 0 => 1, 1 => 100 ) < 3.14 = false
array ( 0 => 1, 1 => 100 ) < '0' = false
array ( 0 => 1, 1 => 100 ) < '10' = false
array ( 0 => 1, 1 => 100 ) < '010' = false
array ( 0 => 1, 1 => 100 ) < '10 elephants' = false
array ( 0 => 1, 1 => 100 ) < 'foo' = false
array ( 0 => 1, 1 => 100 ) < array ( ) = false
array ( 0 => 1, 1 => 100 ) < array ( 0 => 1 ) = false
array ( 0 => 1, 1 => 100 ) < array ( 0 => 1, 1 => 100 ) = false
array ( 0 => 1, 1 => 100 ) < array ( 'foo' => 1, 'bar' => 2 ) = false
array ( 0 => 1, 1 => 100 ) < array ( 'bar' => 1, 'foo' => 2 ) = false
array ( 0 => 1, 1 => 100 ) < (object) array ( ) = true
array ( 0 => 1, 1 => 100 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1, 1 => 100 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1, 1 => 100 ) < DateTime = true
array ( 0 => 1, 1 => 100 ) < resource = false
array ( 0 => 1, 1 => 100 ) < NULL = false
array ( 'foo' => 1, 'bar' => 2 ) < false = false
array ( 'foo' => 1, 'bar' => 2 ) < true = false
array ( 'foo' => 1, 'bar' => 2 ) < 0 = false
array ( 'foo' => 1, 'bar' => 2 ) < 10 = false
array ( 'foo' => 1, 'bar' => 2 ) < 0.0 = false
array ( 'foo' => 1, 'bar' => 2 ) < 10.0 = false
array ( 'foo' => 1, 'bar' => 2 ) < 3.14 = false
array ( 'foo' => 1, 'bar' => 2 ) < '0' = false
array ( 'foo' => 1, 'bar' => 2 ) < '10' = false
array ( 'foo' => 1, 'bar' => 2 ) < '010' = false
array ( 'foo' => 1, 'bar' => 2 ) < '10 elephants' = false
array ( 'foo' => 1, 'bar' => 2 ) < 'foo' = false
array ( 'foo' => 1, 'bar' => 2 ) < array ( ) = false
array ( 'foo' => 1, 'bar' => 2 ) < array ( 0 => 1 ) = false
array ( 'foo' => 1, 'bar' => 2 ) < array ( 0 => 1, 1 => 100 ) = false
array ( 'foo' => 1, 'bar' => 2 ) < array ( 'foo' => 1, 'bar' => 2 ) = false
array ( 'foo' => 1, 'bar' => 2 ) < array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( ) = true
array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) < DateTime = true
array ( 'foo' => 1, 'bar' => 2 ) < resource = false
array ( 'foo' => 1, 'bar' => 2 ) < NULL = false
array ( 'bar' => 1, 'foo' => 2 ) < false = false
array ( 'bar' => 1, 'foo' => 2 ) < true = false
array ( 'bar' => 1, 'foo' => 2 ) < 0 = false
array ( 'bar' => 1, 'foo' => 2 ) < 10 = false
array ( 'bar' => 1, 'foo' => 2 ) < 0.0 = false
array ( 'bar' => 1, 'foo' => 2 ) < 10.0 = false
array ( 'bar' => 1, 'foo' => 2 ) < 3.14 = false
array ( 'bar' => 1, 'foo' => 2 ) < '0' = false
array ( 'bar' => 1, 'foo' => 2 ) < '10' = false
array ( 'bar' => 1, 'foo' => 2 ) < '010' = false
array ( 'bar' => 1, 'foo' => 2 ) < '10 elephants' = false
array ( 'bar' => 1, 'foo' => 2 ) < 'foo' = false
array ( 'bar' => 1, 'foo' => 2 ) < array ( ) = false
array ( 'bar' => 1, 'foo' => 2 ) < array ( 0 => 1 ) = false
array ( 'bar' => 1, 'foo' => 2 ) < array ( 0 => 1, 1 => 100 ) = false
array ( 'bar' => 1, 'foo' => 2 ) < array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) < array ( 'bar' => 1, 'foo' => 2 ) = false
array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( ) = true
array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) < DateTime = true
array ( 'bar' => 1, 'foo' => 2 ) < resource = false
array ( 'bar' => 1, 'foo' => 2 ) < NULL = false
(object) array ( ) < false = false
(object) array ( ) < true = false
(object) array ( ) < 0 = false - Notice Object of class stdClass could not be converted to int
(object) array ( ) < 10 = true - Notice Object of class stdClass could not be converted to int
(object) array ( ) < 0.0 = false - Notice Object of class stdClass could not be converted to float
(object) array ( ) < 10.0 = true - Notice Object of class stdClass could not be converted to float
(object) array ( ) < 3.14 = true - Notice Object of class stdClass could not be converted to float
(object) array ( ) < '0' = false
(object) array ( ) < '10' = false
(object) array ( ) < '010' = false
(object) array ( ) < '10 elephants' = false
(object) array ( ) < 'foo' = false
(object) array ( ) < array ( ) = false
(object) array ( ) < array ( 0 => 1 ) = false
(object) array ( ) < array ( 0 => 1, 1 => 100 ) = false
(object) array ( ) < array ( 'foo' => 1, 'bar' => 2 ) = false
(object) array ( ) < array ( 'bar' => 1, 'foo' => 2 ) = false
(object) array ( ) < (object) array ( ) = false
(object) array ( ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( ) < DateTime = false
(object) array ( ) < resource = false
(object) array ( ) < NULL = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < false = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < true = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < 0 = false - Notice Object of class stdClass could not be converted to int
(object) array ( 'foo' => 1, 'bar' => 2 ) < 10 = true - Notice Object of class stdClass could not be converted to int
(object) array ( 'foo' => 1, 'bar' => 2 ) < 0.0 = false - Notice Object of class stdClass could not be converted to float
(object) array ( 'foo' => 1, 'bar' => 2 ) < 10.0 = true - Notice Object of class stdClass could not be converted to float
(object) array ( 'foo' => 1, 'bar' => 2 ) < 3.14 = true - Notice Object of class stdClass could not be converted to float
(object) array ( 'foo' => 1, 'bar' => 2 ) < '0' = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < '10' = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < '010' = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < '10 elephants' = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < 'foo' = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < array ( ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < array ( 0 => 1 ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < array ( 0 => 1, 1 => 100 ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < array ( 'foo' => 1, 'bar' => 2 ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < array ( 'bar' => 1, 'foo' => 2 ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) < DateTime = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < resource = false
(object) array ( 'foo' => 1, 'bar' => 2 ) < NULL = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < false = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < true = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < 0 = false - Notice Object of class stdClass could not be converted to int
(object) array ( 'bar' => 1, 'foo' => 2 ) < 10 = true - Notice Object of class stdClass could not be converted to int
(object) array ( 'bar' => 1, 'foo' => 2 ) < 0.0 = false - Notice Object of class stdClass could not be converted to float
(object) array ( 'bar' => 1, 'foo' => 2 ) < 10.0 = true - Notice Object of class stdClass could not be converted to float
(object) array ( 'bar' => 1, 'foo' => 2 ) < 3.14 = true - Notice Object of class stdClass could not be converted to float
(object) array ( 'bar' => 1, 'foo' => 2 ) < '0' = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < '10' = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < '010' = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < '10 elephants' = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < 'foo' = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < array ( ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < array ( 0 => 1 ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < array ( 0 => 1, 1 => 100 ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < array ( 'foo' => 1, 'bar' => 2 ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < array ( 'bar' => 1, 'foo' => 2 ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) < (object) array ( 'bar' => 1, 'foo' => 2 ) = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < DateTime = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < resource = false
(object) array ( 'bar' => 1, 'foo' => 2 ) < NULL = false
DateTime < false = false
DateTime < true = false
DateTime < 0 = false - Notice Object of class DateTime could not be converted to int
DateTime < 10 = true - Notice Object of class DateTime could not be converted to int
DateTime < 0.0 = false - Notice Object of class DateTime could not be converted to float
DateTime < 10.0 = true - Notice Object of class DateTime could not be converted to float
DateTime < 3.14 = true - Notice Object of class DateTime could not be converted to float
DateTime < '0' = false
DateTime < '10' = false
DateTime < '010' = false
DateTime < '10 elephants' = false
DateTime < 'foo' = false
DateTime < array ( ) = false
DateTime < array ( 0 => 1 ) = false
DateTime < array ( 0 => 1, 1 => 100 ) = false
DateTime < array ( 'foo' => 1, 'bar' => 2 ) = false
DateTime < array ( 'bar' => 1, 'foo' => 2 ) = false
DateTime < (object) array ( ) = false
DateTime < (object) array ( 'foo' => 1, 'bar' => 2 ) = false
DateTime < (object) array ( 'bar' => 1, 'foo' => 2 ) = false
DateTime < DateTime = false
DateTime < resource = false
DateTime < NULL = false
resource < false = false
resource < true = false
resource < 0 = false
resource < 10 = true
resource < 0.0 = false
resource < 10.0 = true
resource < 3.14 = false
resource < '0' = false
resource < '10' = true
resource < '010' = true
resource < '10 elephants' = true
resource < 'foo' = false
resource < array ( ) = true
resource < array ( 0 => 1 ) = true
resource < array ( 0 => 1, 1 => 100 ) = true
resource < array ( 'foo' => 1, 'bar' => 2 ) = true
resource < array ( 'bar' => 1, 'foo' => 2 ) = true
resource < (object) array ( ) = true
resource < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
resource < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
resource < DateTime = true
resource < resource = false
resource < NULL = false
NULL < false = false
NULL < true = true
NULL < 0 = false
NULL < 10 = true
NULL < 0.0 = false
NULL < 10.0 = true
NULL < 3.14 = true
NULL < '0' = true
NULL < '10' = true
NULL < '010' = true
NULL < '10 elephants' = true
NULL < 'foo' = true
NULL < array ( ) = false
NULL < array ( 0 => 1 ) = true
NULL < array ( 0 => 1, 1 => 100 ) = true
NULL < array ( 'foo' => 1, 'bar' => 2 ) = true
NULL < array ( 'bar' => 1, 'foo' => 2 ) = true
NULL < (object) array ( ) = true
NULL < (object) array ( 'foo' => 1, 'bar' => 2 ) = true
NULL < (object) array ( 'bar' => 1, 'foo' => 2 ) = true
NULL < DateTime = true
NULL < resource = true
NULL < NULL = false