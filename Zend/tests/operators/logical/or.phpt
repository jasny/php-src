--TEST--
logical or '||' operator
--FILE--
<?php
require_once __DIR__ . '/../_helper.inc';

set_error_handler('error_to_exception');

test_two_operands('$a || $b', function($a, $b) { return $a || $b; });

--EXPECT--
false || false = false
false || true = true
false || 0 = false
false || 10 = true
false || 0.0 = false
false || 10.0 = true
false || 3.14 = true
false || '0' = false
false || '10' = true
false || '010' = true
false || '10 elephants' = true
false || 'foo' = true
false || array ( ) = false
false || array ( 0 => 1 ) = true
false || array ( 0 => 1, 1 => 100 ) = true
false || array ( 'foo' => 1, 'bar' => 2 ) = true
false || array ( 'bar' => 1, 'foo' => 2 ) = true
false || (object) array ( ) = true
false || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
false || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
false || DateTime = true
false || resource = true
false || NULL = false
true || false = true
true || true = true
true || 0 = true
true || 10 = true
true || 0.0 = true
true || 10.0 = true
true || 3.14 = true
true || '0' = true
true || '10' = true
true || '010' = true
true || '10 elephants' = true
true || 'foo' = true
true || array ( ) = true
true || array ( 0 => 1 ) = true
true || array ( 0 => 1, 1 => 100 ) = true
true || array ( 'foo' => 1, 'bar' => 2 ) = true
true || array ( 'bar' => 1, 'foo' => 2 ) = true
true || (object) array ( ) = true
true || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
true || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
true || DateTime = true
true || resource = true
true || NULL = true
0 || false = false
0 || true = true
0 || 0 = false
0 || 10 = true
0 || 0.0 = false
0 || 10.0 = true
0 || 3.14 = true
0 || '0' = false
0 || '10' = true
0 || '010' = true
0 || '10 elephants' = true
0 || 'foo' = true
0 || array ( ) = false
0 || array ( 0 => 1 ) = true
0 || array ( 0 => 1, 1 => 100 ) = true
0 || array ( 'foo' => 1, 'bar' => 2 ) = true
0 || array ( 'bar' => 1, 'foo' => 2 ) = true
0 || (object) array ( ) = true
0 || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
0 || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
0 || DateTime = true
0 || resource = true
0 || NULL = false
10 || false = true
10 || true = true
10 || 0 = true
10 || 10 = true
10 || 0.0 = true
10 || 10.0 = true
10 || 3.14 = true
10 || '0' = true
10 || '10' = true
10 || '010' = true
10 || '10 elephants' = true
10 || 'foo' = true
10 || array ( ) = true
10 || array ( 0 => 1 ) = true
10 || array ( 0 => 1, 1 => 100 ) = true
10 || array ( 'foo' => 1, 'bar' => 2 ) = true
10 || array ( 'bar' => 1, 'foo' => 2 ) = true
10 || (object) array ( ) = true
10 || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
10 || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
10 || DateTime = true
10 || resource = true
10 || NULL = true
0.0 || false = false
0.0 || true = true
0.0 || 0 = false
0.0 || 10 = true
0.0 || 0.0 = false
0.0 || 10.0 = true
0.0 || 3.14 = true
0.0 || '0' = false
0.0 || '10' = true
0.0 || '010' = true
0.0 || '10 elephants' = true
0.0 || 'foo' = true
0.0 || array ( ) = false
0.0 || array ( 0 => 1 ) = true
0.0 || array ( 0 => 1, 1 => 100 ) = true
0.0 || array ( 'foo' => 1, 'bar' => 2 ) = true
0.0 || array ( 'bar' => 1, 'foo' => 2 ) = true
0.0 || (object) array ( ) = true
0.0 || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
0.0 || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
0.0 || DateTime = true
0.0 || resource = true
0.0 || NULL = false
10.0 || false = true
10.0 || true = true
10.0 || 0 = true
10.0 || 10 = true
10.0 || 0.0 = true
10.0 || 10.0 = true
10.0 || 3.14 = true
10.0 || '0' = true
10.0 || '10' = true
10.0 || '010' = true
10.0 || '10 elephants' = true
10.0 || 'foo' = true
10.0 || array ( ) = true
10.0 || array ( 0 => 1 ) = true
10.0 || array ( 0 => 1, 1 => 100 ) = true
10.0 || array ( 'foo' => 1, 'bar' => 2 ) = true
10.0 || array ( 'bar' => 1, 'foo' => 2 ) = true
10.0 || (object) array ( ) = true
10.0 || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
10.0 || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
10.0 || DateTime = true
10.0 || resource = true
10.0 || NULL = true
3.14 || false = true
3.14 || true = true
3.14 || 0 = true
3.14 || 10 = true
3.14 || 0.0 = true
3.14 || 10.0 = true
3.14 || 3.14 = true
3.14 || '0' = true
3.14 || '10' = true
3.14 || '010' = true
3.14 || '10 elephants' = true
3.14 || 'foo' = true
3.14 || array ( ) = true
3.14 || array ( 0 => 1 ) = true
3.14 || array ( 0 => 1, 1 => 100 ) = true
3.14 || array ( 'foo' => 1, 'bar' => 2 ) = true
3.14 || array ( 'bar' => 1, 'foo' => 2 ) = true
3.14 || (object) array ( ) = true
3.14 || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
3.14 || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
3.14 || DateTime = true
3.14 || resource = true
3.14 || NULL = true
'0' || false = false
'0' || true = true
'0' || 0 = false
'0' || 10 = true
'0' || 0.0 = false
'0' || 10.0 = true
'0' || 3.14 = true
'0' || '0' = false
'0' || '10' = true
'0' || '010' = true
'0' || '10 elephants' = true
'0' || 'foo' = true
'0' || array ( ) = false
'0' || array ( 0 => 1 ) = true
'0' || array ( 0 => 1, 1 => 100 ) = true
'0' || array ( 'foo' => 1, 'bar' => 2 ) = true
'0' || array ( 'bar' => 1, 'foo' => 2 ) = true
'0' || (object) array ( ) = true
'0' || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'0' || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'0' || DateTime = true
'0' || resource = true
'0' || NULL = false
'10' || false = true
'10' || true = true
'10' || 0 = true
'10' || 10 = true
'10' || 0.0 = true
'10' || 10.0 = true
'10' || 3.14 = true
'10' || '0' = true
'10' || '10' = true
'10' || '010' = true
'10' || '10 elephants' = true
'10' || 'foo' = true
'10' || array ( ) = true
'10' || array ( 0 => 1 ) = true
'10' || array ( 0 => 1, 1 => 100 ) = true
'10' || array ( 'foo' => 1, 'bar' => 2 ) = true
'10' || array ( 'bar' => 1, 'foo' => 2 ) = true
'10' || (object) array ( ) = true
'10' || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'10' || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'10' || DateTime = true
'10' || resource = true
'10' || NULL = true
'010' || false = true
'010' || true = true
'010' || 0 = true
'010' || 10 = true
'010' || 0.0 = true
'010' || 10.0 = true
'010' || 3.14 = true
'010' || '0' = true
'010' || '10' = true
'010' || '010' = true
'010' || '10 elephants' = true
'010' || 'foo' = true
'010' || array ( ) = true
'010' || array ( 0 => 1 ) = true
'010' || array ( 0 => 1, 1 => 100 ) = true
'010' || array ( 'foo' => 1, 'bar' => 2 ) = true
'010' || array ( 'bar' => 1, 'foo' => 2 ) = true
'010' || (object) array ( ) = true
'010' || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'010' || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'010' || DateTime = true
'010' || resource = true
'010' || NULL = true
'10 elephants' || false = true
'10 elephants' || true = true
'10 elephants' || 0 = true
'10 elephants' || 10 = true
'10 elephants' || 0.0 = true
'10 elephants' || 10.0 = true
'10 elephants' || 3.14 = true
'10 elephants' || '0' = true
'10 elephants' || '10' = true
'10 elephants' || '010' = true
'10 elephants' || '10 elephants' = true
'10 elephants' || 'foo' = true
'10 elephants' || array ( ) = true
'10 elephants' || array ( 0 => 1 ) = true
'10 elephants' || array ( 0 => 1, 1 => 100 ) = true
'10 elephants' || array ( 'foo' => 1, 'bar' => 2 ) = true
'10 elephants' || array ( 'bar' => 1, 'foo' => 2 ) = true
'10 elephants' || (object) array ( ) = true
'10 elephants' || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'10 elephants' || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'10 elephants' || DateTime = true
'10 elephants' || resource = true
'10 elephants' || NULL = true
'foo' || false = true
'foo' || true = true
'foo' || 0 = true
'foo' || 10 = true
'foo' || 0.0 = true
'foo' || 10.0 = true
'foo' || 3.14 = true
'foo' || '0' = true
'foo' || '10' = true
'foo' || '010' = true
'foo' || '10 elephants' = true
'foo' || 'foo' = true
'foo' || array ( ) = true
'foo' || array ( 0 => 1 ) = true
'foo' || array ( 0 => 1, 1 => 100 ) = true
'foo' || array ( 'foo' => 1, 'bar' => 2 ) = true
'foo' || array ( 'bar' => 1, 'foo' => 2 ) = true
'foo' || (object) array ( ) = true
'foo' || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
'foo' || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
'foo' || DateTime = true
'foo' || resource = true
'foo' || NULL = true
array ( ) || false = false
array ( ) || true = true
array ( ) || 0 = false
array ( ) || 10 = true
array ( ) || 0.0 = false
array ( ) || 10.0 = true
array ( ) || 3.14 = true
array ( ) || '0' = false
array ( ) || '10' = true
array ( ) || '010' = true
array ( ) || '10 elephants' = true
array ( ) || 'foo' = true
array ( ) || array ( ) = false
array ( ) || array ( 0 => 1 ) = true
array ( ) || array ( 0 => 1, 1 => 100 ) = true
array ( ) || array ( 'foo' => 1, 'bar' => 2 ) = true
array ( ) || array ( 'bar' => 1, 'foo' => 2 ) = true
array ( ) || (object) array ( ) = true
array ( ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( ) || DateTime = true
array ( ) || resource = true
array ( ) || NULL = false
array ( 0 => 1 ) || false = true
array ( 0 => 1 ) || true = true
array ( 0 => 1 ) || 0 = true
array ( 0 => 1 ) || 10 = true
array ( 0 => 1 ) || 0.0 = true
array ( 0 => 1 ) || 10.0 = true
array ( 0 => 1 ) || 3.14 = true
array ( 0 => 1 ) || '0' = true
array ( 0 => 1 ) || '10' = true
array ( 0 => 1 ) || '010' = true
array ( 0 => 1 ) || '10 elephants' = true
array ( 0 => 1 ) || 'foo' = true
array ( 0 => 1 ) || array ( ) = true
array ( 0 => 1 ) || array ( 0 => 1 ) = true
array ( 0 => 1 ) || array ( 0 => 1, 1 => 100 ) = true
array ( 0 => 1 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1 ) || (object) array ( ) = true
array ( 0 => 1 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1 ) || DateTime = true
array ( 0 => 1 ) || resource = true
array ( 0 => 1 ) || NULL = true
array ( 0 => 1, 1 => 100 ) || false = true
array ( 0 => 1, 1 => 100 ) || true = true
array ( 0 => 1, 1 => 100 ) || 0 = true
array ( 0 => 1, 1 => 100 ) || 10 = true
array ( 0 => 1, 1 => 100 ) || 0.0 = true
array ( 0 => 1, 1 => 100 ) || 10.0 = true
array ( 0 => 1, 1 => 100 ) || 3.14 = true
array ( 0 => 1, 1 => 100 ) || '0' = true
array ( 0 => 1, 1 => 100 ) || '10' = true
array ( 0 => 1, 1 => 100 ) || '010' = true
array ( 0 => 1, 1 => 100 ) || '10 elephants' = true
array ( 0 => 1, 1 => 100 ) || 'foo' = true
array ( 0 => 1, 1 => 100 ) || array ( ) = true
array ( 0 => 1, 1 => 100 ) || array ( 0 => 1 ) = true
array ( 0 => 1, 1 => 100 ) || array ( 0 => 1, 1 => 100 ) = true
array ( 0 => 1, 1 => 100 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1, 1 => 100 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1, 1 => 100 ) || (object) array ( ) = true
array ( 0 => 1, 1 => 100 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 0 => 1, 1 => 100 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 0 => 1, 1 => 100 ) || DateTime = true
array ( 0 => 1, 1 => 100 ) || resource = true
array ( 0 => 1, 1 => 100 ) || NULL = true
array ( 'foo' => 1, 'bar' => 2 ) || false = true
array ( 'foo' => 1, 'bar' => 2 ) || true = true
array ( 'foo' => 1, 'bar' => 2 ) || 0 = true
array ( 'foo' => 1, 'bar' => 2 ) || 10 = true
array ( 'foo' => 1, 'bar' => 2 ) || 0.0 = true
array ( 'foo' => 1, 'bar' => 2 ) || 10.0 = true
array ( 'foo' => 1, 'bar' => 2 ) || 3.14 = true
array ( 'foo' => 1, 'bar' => 2 ) || '0' = true
array ( 'foo' => 1, 'bar' => 2 ) || '10' = true
array ( 'foo' => 1, 'bar' => 2 ) || '010' = true
array ( 'foo' => 1, 'bar' => 2 ) || '10 elephants' = true
array ( 'foo' => 1, 'bar' => 2 ) || 'foo' = true
array ( 'foo' => 1, 'bar' => 2 ) || array ( ) = true
array ( 'foo' => 1, 'bar' => 2 ) || array ( 0 => 1 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || array ( 0 => 1, 1 => 100 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( ) = true
array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'foo' => 1, 'bar' => 2 ) || DateTime = true
array ( 'foo' => 1, 'bar' => 2 ) || resource = true
array ( 'foo' => 1, 'bar' => 2 ) || NULL = true
array ( 'bar' => 1, 'foo' => 2 ) || false = true
array ( 'bar' => 1, 'foo' => 2 ) || true = true
array ( 'bar' => 1, 'foo' => 2 ) || 0 = true
array ( 'bar' => 1, 'foo' => 2 ) || 10 = true
array ( 'bar' => 1, 'foo' => 2 ) || 0.0 = true
array ( 'bar' => 1, 'foo' => 2 ) || 10.0 = true
array ( 'bar' => 1, 'foo' => 2 ) || 3.14 = true
array ( 'bar' => 1, 'foo' => 2 ) || '0' = true
array ( 'bar' => 1, 'foo' => 2 ) || '10' = true
array ( 'bar' => 1, 'foo' => 2 ) || '010' = true
array ( 'bar' => 1, 'foo' => 2 ) || '10 elephants' = true
array ( 'bar' => 1, 'foo' => 2 ) || 'foo' = true
array ( 'bar' => 1, 'foo' => 2 ) || array ( ) = true
array ( 'bar' => 1, 'foo' => 2 ) || array ( 0 => 1 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || array ( 0 => 1, 1 => 100 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( ) = true
array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
array ( 'bar' => 1, 'foo' => 2 ) || DateTime = true
array ( 'bar' => 1, 'foo' => 2 ) || resource = true
array ( 'bar' => 1, 'foo' => 2 ) || NULL = true
(object) array ( ) || false = true
(object) array ( ) || true = true
(object) array ( ) || 0 = true
(object) array ( ) || 10 = true
(object) array ( ) || 0.0 = true
(object) array ( ) || 10.0 = true
(object) array ( ) || 3.14 = true
(object) array ( ) || '0' = true
(object) array ( ) || '10' = true
(object) array ( ) || '010' = true
(object) array ( ) || '10 elephants' = true
(object) array ( ) || 'foo' = true
(object) array ( ) || array ( ) = true
(object) array ( ) || array ( 0 => 1 ) = true
(object) array ( ) || array ( 0 => 1, 1 => 100 ) = true
(object) array ( ) || array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( ) || array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( ) || (object) array ( ) = true
(object) array ( ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( ) || DateTime = true
(object) array ( ) || resource = true
(object) array ( ) || NULL = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || false = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || true = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 0 = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 10 = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 0.0 = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 10.0 = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 3.14 = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || '0' = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || '10' = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || '010' = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || '10 elephants' = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || 'foo' = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || array ( ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || array ( 0 => 1 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || array ( 0 => 1, 1 => 100 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || DateTime = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || resource = true
(object) array ( 'foo' => 1, 'bar' => 2 ) || NULL = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || false = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || true = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 0 = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 10 = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 0.0 = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 10.0 = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 3.14 = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || '0' = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || '10' = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || '010' = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || '10 elephants' = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || 'foo' = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || array ( ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || array ( 0 => 1 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || array ( 0 => 1, 1 => 100 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || DateTime = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || resource = true
(object) array ( 'bar' => 1, 'foo' => 2 ) || NULL = true
DateTime || false = true
DateTime || true = true
DateTime || 0 = true
DateTime || 10 = true
DateTime || 0.0 = true
DateTime || 10.0 = true
DateTime || 3.14 = true
DateTime || '0' = true
DateTime || '10' = true
DateTime || '010' = true
DateTime || '10 elephants' = true
DateTime || 'foo' = true
DateTime || array ( ) = true
DateTime || array ( 0 => 1 ) = true
DateTime || array ( 0 => 1, 1 => 100 ) = true
DateTime || array ( 'foo' => 1, 'bar' => 2 ) = true
DateTime || array ( 'bar' => 1, 'foo' => 2 ) = true
DateTime || (object) array ( ) = true
DateTime || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
DateTime || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
DateTime || DateTime = true
DateTime || resource = true
DateTime || NULL = true
resource || false = true
resource || true = true
resource || 0 = true
resource || 10 = true
resource || 0.0 = true
resource || 10.0 = true
resource || 3.14 = true
resource || '0' = true
resource || '10' = true
resource || '010' = true
resource || '10 elephants' = true
resource || 'foo' = true
resource || array ( ) = true
resource || array ( 0 => 1 ) = true
resource || array ( 0 => 1, 1 => 100 ) = true
resource || array ( 'foo' => 1, 'bar' => 2 ) = true
resource || array ( 'bar' => 1, 'foo' => 2 ) = true
resource || (object) array ( ) = true
resource || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
resource || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
resource || DateTime = true
resource || resource = true
resource || NULL = true
NULL || false = false
NULL || true = true
NULL || 0 = false
NULL || 10 = true
NULL || 0.0 = false
NULL || 10.0 = true
NULL || 3.14 = true
NULL || '0' = false
NULL || '10' = true
NULL || '010' = true
NULL || '10 elephants' = true
NULL || 'foo' = true
NULL || array ( ) = false
NULL || array ( 0 => 1 ) = true
NULL || array ( 0 => 1, 1 => 100 ) = true
NULL || array ( 'foo' => 1, 'bar' => 2 ) = true
NULL || array ( 'bar' => 1, 'foo' => 2 ) = true
NULL || (object) array ( ) = true
NULL || (object) array ( 'foo' => 1, 'bar' => 2 ) = true
NULL || (object) array ( 'bar' => 1, 'foo' => 2 ) = true
NULL || DateTime = true
NULL || resource = true
NULL || NULL = false