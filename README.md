# PHP Array Sum Function with Non-Numeric Handling

This repository contains a PHP function designed to calculate the sum of numbers within an array.  However, the initial implementation lacks proper error handling for non-numeric input, leading to potential issues.  The solution demonstrates how to add robust error handling to ensure the function operates correctly regardless of input type.

## Bug Description:
The provided `calculateSum` function fails when non-numeric values are included in the input array.  This results in unexpected errors or incorrect results. The solution shows how to avoid the problem by implementing type checking and alternative handling for non-numeric values.

## Solution:
The solution introduces checks to filter out non-numeric values before performing the sum calculation, preventing the runtime errors encountered in the original code.