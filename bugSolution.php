The solution involves ensuring that all variables used within functions are either passed as arguments or are declared locally within the function's scope.  Here's the corrected `processArray` function:

```php
function processArray(array $data) {
  $result = [];
  foreach ($data as $value) {
    $newValue = processValue($value); 
    $result[] = $newValue; 
  }
  return $result;
}

function processValue($value) {
  $newValue = $value * 2; 
  return $newValue;
}

$myArray = [1, 2, 3, 4, 5];
$processedArray = processArray($myArray);
print_r($processedArray); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
```

By strictly managing variable scope, we prevent unintended side effects and ensure the code's predictability and maintainability.