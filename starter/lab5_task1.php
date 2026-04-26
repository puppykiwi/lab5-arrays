<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 1: Array Declaration, Initialisation & Traversal [6 marks]
 *
 * @author     Johnray Mwendwa
 * @student    ENE212-0070/2022
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       24/4/2026
 */

// ══════════════════════════════════════════════════════════════
// EXERCISE A — Indexed Array: Sensor Readings
// ══════════════════════════════════════════════════════════════
// Declare an indexed array $temperatures with 6 float values:
// 36.5, 37.1, 38.4, 36.9, 39.2, 37.8
// 1. Print the array using print_r()
// 2. Access and print the 3rd and 5th elements by index
// 3. Traverse using a for loop — print each value with its index:
//    "Reading [0]: 36.5°C"
// 4. Traverse using foreach — same output format

// TODO: Exercise A — your code here
$arr = [36.5, 37.1, 38.4, 36.9, 39.2, 37.8];
print_r($arr);
echo "3rd element: " . $arr[2] . "°C\n";
echo "5th element: " . $arr[4] . "°C\n";

echo "\n Traversing with for loop:\n";
for ($i = 0; $i < count($arr); $i++) {
    echo "Reading [$i]: " . $arr[$i] . "°C\n";
}
echo "\n Traversing with foreach loop:\n";
foreach ($arr as $index => $value) {
    echo "Reading [$index]: " . $value . "°C\n";
}


// ══════════════════════════════════════════════════════════════
// EXERCISE B — Associative Array: Student Record
// ══════════════════════════════════════════════════════════════
// Declare an associative array $student with keys:
// "name", "reg_number", "course", "year", "gpa"
// Use your own details as values.
// 1. Print the full array with print_r()
// 2. Access and print name and gpa individually
// 3. Traverse with foreach (key => value) and print:
//    "name: Jane Wanjiku"
//    "reg_number: SCT212-0001/2024"  etc.

// TODO: Exercise B — your code here
$student = [
    "name" => "Johnray Mwendwa",
    "reg_number" => "ENE212-0070/2022",
    "course" => "Computer Engineering",
    "year" => 3,
    "gpa" => 4.0
];
print_r($student);
echo "\nName: " . $student["name"] . "\n";
echo "GPA: " . $student["gpa"] . "\n";
echo "\nTraversing with foreach loop:\n";
foreach ($student as $key => $value) {
    echo "$key: $value\n";
}

// ══════════════════════════════════════════════════════════════
// EXERCISE C — Array Modification
// ══════════════════════════════════════════════════════════════
// Start with: $fruits = ["mango", "banana", "avocado"];
// 1. Add "pawpaw" using array_push()
// 2. Add "guava" using the [] syntax
// 3. Print the array after each addition
// 4. Remove the last element using array_pop() — print result
// 5. Remove "banana" using unset() — print result
// 6. Print count() before and after each modification

// TODO: Exercise C — your code here
$fruits = ["mango", "banana", "avocado"];
echo "Initial fruits: ";
print_r($fruits);
echo "Count: " . count($fruits) . "\n";
array_push($fruits, "pawpaw");
echo "\nAfter adding pawpaw: ";
print_r($fruits);
echo "Count: " . count($fruits) . "\n";
$fruits[] = "guava";
echo "\nAfter appending guava: ";
print_r($fruits);
echo "Count: " . count($fruits) . "\n";
array_pop($fruits);
echo "\nAfter removing last element: ";
print_r($fruits);
echo "Count: " . count($fruits) . "\n";
unset($fruits[1]);
echo "\nAfter removing banana: ";
print_r($fruits);
echo "Count: " . count($fruits) . "\n";


// ══════════════════════════════════════════════════════════════
// EXERCISE D — Nested Array
// ══════════════════════════════════════════════════════════════
// Declare a nested associative array $lab_results with
// at least 3 students, each having: name, cat_total, exam
// Traverse with nested foreach and print a formatted
// result for each student showing name and total marks.

// TODO: Exercise D — your code here
$lab_results = [
    [
        "name" => "John",
        "cat_total" => 25,
        "exam" => 70
    ],
    [
        "name" => "Ray",
        "cat_total" => 22,
        "exam" => 65
    ],
    [
        "name" => "Mwendwa",
        "cat_total" => 28,
        "exam" => 80
    ]
];

foreach ($lab_results as $student) {
    $total_marks = $student["cat_total"] + $student["exam"];
    echo "Student: " . $student["name"] . " - Total Marks: " . $total_marks . "\n";
}


