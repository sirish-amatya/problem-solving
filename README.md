# Find the subarray matching the given sum

This program is used to find the first contiguous subarray whose sum matches the given number
The input is non-negative numbers and the sum that is to be matched. Returns indexes if sum is 
matched and -1 if subarray is not found

## Getting Started

This program contains a function which takes 2 parameters. $arr containing non-negative numbers and $sum 
that is to be matched

```
subarray_sum($arr, $sum)
```

### Example

```
print subarray_sum([1,2,3,4,5,7], 10); //Returns 0,3 (i.e. start at 0 and end at 3 to get the total sum of 10 )
print subarray_sum([2,3,1,4,5,7], 9); //Returns 3,4
```

### Prerequisites

php-cli

### Execute the program
```
php subarray_sum.php
```
