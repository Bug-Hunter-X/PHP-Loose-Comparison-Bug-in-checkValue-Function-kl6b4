This improved version uses strict comparison (`===`) to ensure that only values identical to 1 (as integers) or '1' (as strings) are accepted. 
```php
<?php
function checkValue($value) {
  return $value === 1 || $value === '1';
}

// Test cases
echo checkValue(1) . "\n"; // true
echo checkValue('1') . "\n"; // true
echo checkValue(0) . "\n"; // false
echo checkValue('0') . "\n"; // false
echo checkValue('') . "\n"; // false
echo checkValue([]) . "\n"; // false
echo checkValue(false) . "\n"; // false
?>
```