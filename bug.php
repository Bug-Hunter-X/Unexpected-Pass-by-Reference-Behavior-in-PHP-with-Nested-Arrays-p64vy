```php
<?php
function increment_array_values(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$my_array = [1, 2, 3];
increment_array_values($my_array);
print_r($my_array); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// The bug appears when dealing with nested arrays
$nested_array = [[1, 2], [3, 4]];
increment_array_values($nested_array);
print_r($nested_array); // Output: Array ( [0] => 2 [1] => 4 )
// Expected output: Array ( [0] => Array ( [0] => 2 [1] => 3 ) [1] => Array ( [0] => 4 [1] => 5 ) )
?>
```