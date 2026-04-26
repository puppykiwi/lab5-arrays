<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 2: Built-in Array Functions [6 marks]
 *
 * @author     Johnray Mwendwa
 * @student    ENE212-0070/2022
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       24/4/2026
 */

// Working dataset — use this array for ALL exercises below
$scores = [72, 45, 88, 91, 63, 77, 55, 88, 49, 95, 63, 70];

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Counting & Summing
// ══════════════════════════════════════════════════════════════
// Use count() to print total number of scores
// Use array_sum() to print total marks
// Compute and print average (to 2 decimal places)

// TODO: Exercise A — your code here
// echo "Total number of scores: " . count($scores) . "\n";
// echo "Total marks: " . array_sum($scores) . "\n";
// echo "Average marks: " . number_format(array_sum($scores) / count($scores), 2) . "\n";


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Sorting
// ══════════════════════════════════════════════════════════════
// 1. Sort $scores ascending using sort() — print result
// 2. Sort $scores descending using rsort() — print result
// 3. Sort $scores ascending again and use array_reverse()
//    to get descending — print result
// Note: explain in a comment why sort() modifies the original array

// TODO: Exercise B — your code here
// sort($scores);
// echo "Scores sorted ascending: ";
// print_r($scores);   
// rsort($scores);
// echo "Scores sorted descending: ";
// print_r($scores);
// sort($scores);
// echo "Scores sorted ascending again: ";
// $descending = array_reverse($scores);
// echo "Scores sorted descending using array_reverse: ";
// print_r($descending);

// sort() modifies the original array because it sorts the elements in place, meaning it does not create a new array.


// ══════════════════════════════════════════════════════════════
// EXERCISE C — Searching
// ══════════════════════════════════════════════════════════════
// 1. Use in_array() to check if 88 exists — print true/false
// 2. Use in_array() to check if 100 exists — print true/false
// 3. Use array_search() to find the index of 91 — print it
// 4. Use array_search() on a value that doesn't exist —
//    show how to handle the false return value safely

// TODO: Exercise C — your code here
// echo "Does 88 exist? " . (in_array(88, $scores) ? "true" : "false") . "\n";
// echo "Does 100 exist? " . (in_array(100, $scores) ? "true" : "false") . "\n";
// $index = array_search(91, $scores);
// if ($index !== false) {
//     echo "Index of 91: " . $index . "\n";
// } else {
//     echo "91 not found in scores.\n";
// }
// $index = array_search(100, $scores);
// if ($index !== false) {
//     echo "Index of 100: " . $index . "\n";
// } else {
//     echo "100 not found in scores.\n";
// }


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Transformation Functions
// ══════════════════════════════════════════════════════════════
// Use the original $scores array (re-declare if needed)
// 1. array_unique() — remove duplicates, print result
// 2. array_slice($scores, 2, 5) — print the slice and
//    explain what the parameters mean in a comment
// 3. implode(", ", $scores) — print as comma-separated string
// 4. array_reverse() — print reversed array

// TODO: Exercise D — your code here
$scores = [72, 45, 88, 91, 63, 77, 55, 88, 49, 95, 63, 70];
$unique_scores = array_unique($scores);
echo "Unique scores: ";
print_r($unique_scores);
// array_slice($scores, 2, 5) means we start slicing from index 2 and take 5 elements from that point.
$slice = array_slice($scores, 2, 5);
echo "Slice of scores from index 2, length 5: ";
print_r($slice);
$comma_separated = implode(", ", $scores);
echo "Scores as comma-separated string: " . $comma_separated . "\n";
$reversed = array_reverse($scores);
echo "Reversed scores: ";
print_r($reversed);

