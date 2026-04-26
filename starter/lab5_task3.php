<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 3: Bubble Sort & Linear Search [7 marks]
 *
 * IMPORTANT: You must write pseudocode AND a flowchart for BOTH
 * the bubble sort and linear search in your PDF report BEFORE
 * writing any code below.
 *
 * @author     Johnray Mwendwa
 * @student    ENE212-0070/2022
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       24/4/2026
 */

// Working dataset
$data = [64, 34, 25, 12, 22, 11, 90, 47, 55, 38];

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Manual Bubble Sort (ascending)
// ══════════════════════════════════════════════════════════════
// Implement bubble sort WITHOUT using PHP's sort() function.
// Use nested for loops.
// Rules:
//   - Outer loop: runs (n-1) times
//   - Inner loop: compares adjacent pairs
//   - Swap if left > right using a $temp variable
//   - Print the array after EACH full outer pass to show progress

// Expected: [11, 12, 22, 25, 34, 38, 47, 55, 64, 90]

// After sorting, answer in a comment:
// Q: How many comparisons does bubble sort make for n=10 elements
//    in the worst case? Show your working.

// TODO: Exercise A — Bubble Sort — your code here
$n = count($data);

echo "Exercise A — Bubble Sort Progress\n";
for ($i = 0; $i < $n - 1; $i++) {
	for ($j = 0; $j < $n - 1 - $i; $j++) {
		if ($data[$j] > $data[$j + 1]) {
			$temp = $data[$j];
			$data[$j] = $data[$j + 1];
			$data[$j + 1] = $temp;
		}
	}

	echo "Pass " . ($i + 1) . ": [" . implode(", ", $data) . "]\n";
}

echo "Sorted array: [" . implode(", ", $data) . "]\n";

// Worst-case comparisons for n = 10:
// (n - 1) + (n - 2) + ... + 1
// = 9 + 8 + 7 + 6 + 5 + 4 + 3 + 2 + 1
// = 45 comparisons




// ══════════════════════════════════════════════════════════════
// EXERCISE B — Optimised Bubble Sort
// ══════════════════════════════════════════════════════════════
// Modify your bubble sort to use a $swapped flag.
// If no swaps occur in a full pass, the array is already sorted
// — break early. This is the optimised version.
// Test it on an already-sorted array and show it exits early.

// TODO: Exercise B — Optimised Bubble Sort — your code here
$data2 = [11, 12, 99, 22, 55, 34, 58, 47, 55, 94, 90];
$n2 = count($data2);
echo "\nExercise B — Optimised Bubble Sort Progress\n";
for ($i = 0; $i < $n2 - 1; $i++) {
    $swapped = false;
    for ($j = 0; $j < $n2 - 1 - $i; $j++) {
        if ($data2[$j] > $data2[$j + 1]) {
            $temp = $data2[$j];
            $data2[$j] = $data2[$j + 1];
            $data2[$j + 1] = $temp;
            $swapped = true;
        }
    }
    if (!$swapped) {
        break;
    }
}
echo "Sorted array: [" . implode(", ", $data2) . "]\n";



// ══════════════════════════════════════════════════════════════
// EXERCISE C — Linear Search
// ══════════════════════════════════════════════════════════════
// Implement a linear search function:
//   linearSearch(array $arr, $target): int|false
// Returns the INDEX of $target if found, false if not found.
// Do NOT use in_array() or array_search() — implement manually.
//
// Test with:
//   linearSearch($data, 22)  → should return index 4 (original array)
//   linearSearch($data, 99)  → should return false
//
// Print clearly: "Found 22 at index 4" or "99 not found"

// TODO: Exercise C — Linear Search — your code here
function linearSearch(array $arr, $target) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === $target) {
            return $i;
        }
    }
    return false;
}

linearSearch($data2, 22) !== false ? print("Found 22 at index " . linearSearch($data2, 22) . "\n") : print("22 not found\n");
linearSearch($data2, 99) !== false ? print("Found 99 at index " . linearSearch($data2, 99) . "\n") : print("99 not found\n");


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Sort then Search
// ══════════════════════════════════════════════════════════════
// 1. Sort $data using your bubble sort from Exercise A
// 2. Run linearSearch() on the sorted array for value 47
// 3. In a comment, explain: after sorting, has the index of 47
//    changed compared to the original array? Why does this matter?

// TODO: Exercise D — your code here

linearSearch($data, 47)  !== false ? print("Found 47 at index " . linearSearch($data, 47) . "\n") : print("47 not found\n");
// After sorting, the index of 47 has changed compared to the original array because the elements have been rearranged in ascending order. This matters because it affects how we can locate elements in the array. 