# PHP Loose Comparison Bug

This repository demonstrates a common yet easily overlooked bug in PHP related to loose comparison (==) and type juggling. The `checkValue` function exhibits unexpected behavior due to the way PHP handles comparisons between different data types.

## Bug Description

The `checkValue` function is intended to check if a given value is equal to either 1 or '1'. However, because of PHP's loose comparison, it will evaluate to `true` for numerous unexpected inputs, such as an empty string, an array, and the boolean `false`. This stems from the loose comparison rules where these values implicitly convert to 0, which further loosely converts to '1'.

## Solution

The solution uses strict comparison (===) to rectify this issue. Strict comparison demands that both the value and type of the compared variables match. This eliminates the unexpected true values by preventing implicit type juggling.