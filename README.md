# PHP Pass-by-Reference Bug with Nested Arrays

This repository demonstrates a subtle bug related to pass-by-reference in PHP when working with nested arrays. The `increment_array_values` function intends to increment all values in an array, but it fails to correctly handle nested arrays.

The bug stems from how PHP handles references when iterating through a nested array.  The fix involves using a nested loop to access each inner array's element directly.