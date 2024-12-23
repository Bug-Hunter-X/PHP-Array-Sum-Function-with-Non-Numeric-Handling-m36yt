<?php
function calculateSum(array $numbers): int
{
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log a warning, skip, or throw an exception)
      error_log("Non-numeric value encountered: " . var_export($number, true));
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5, 'a', 6.7];
$result = calculateSum($numbers);
echo "Sum: " . $result; // Output: Sum: 21.7 (with error log entry)
?> 