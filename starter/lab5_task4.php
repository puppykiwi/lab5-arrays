<?php
/**
 * ICS 2371 — Lab 5: Arrays and Array Operations
 * Task 4: Engineering Analysis Using Arrays & Loops [6 marks]
 *
 * IMPORTANT: Pseudocode AND flowchart required in PDF report
 * before writing code.
 *
 * @author     Johnray Mwendwa
 * @student    ENE212-0070/2022
 * @lab        Lab 5 of 14
 * @unit       ICS 2371
 * @date       24/4/2026
 */

// ── Scenario: Bridge Load Sensor Analysis ────────────────────
// A bridge has 8 load sensors recording weight in tonnes.
// Analyse the readings to support a structural safety report.

$sensor_readings = [20.1, 21.3, 19.9, 22.0, 18.5, 20.8, 19.2, 21.7];
$sensor_labels   = ["S1", "S2", "S3", "S4", "S5", "S6", "S7", "S8"];
$max_safe_load   = 18.0; // tonnes — safety threshold

// ── STEP 1: Basic statistics ─────────────────────────────────
// Compute WITHOUT using array_sum(), max(), min() PHP functions
//   $mean   — average of all readings (2 decimal places)
//   $max    — highest reading + which sensor
//   $min    — lowest reading + which sensor
//   $total  — sum of all readings


// TODO: Step 1 — your code here
$mean = 0;
$max = $sensor_readings[0];
$min = $sensor_readings[0];
$total = 0;
$max_sensor = $sensor_labels[0];
$min_sensor = $sensor_labels[0];
for ($i = 0; $i < count($sensor_readings); $i++) {
    $total += $sensor_readings[$i];
    
    if ($sensor_readings[$i] > $max) {
        $max = $sensor_readings[$i];
        $max_sensor = $sensor_labels[$i];
    }
    
    if ($sensor_readings[$i] < $min) {
        $min = $sensor_readings[$i];
        $min_sensor = $sensor_labels[$i];
    }
}
$mean = number_format($total / count($sensor_readings), 2);
echo "Mean load: $mean tonnes\n";
echo "Max load: $max tonnes (Sensor: $max_sensor)\n";
echo "Min load: $min tonnes (Sensor: $min_sensor)\n";



// ── STEP 2: Above-average count ──────────────────────────────
// Count how many sensors recorded ABOVE the mean.
// Store their labels in an $above_avg array.
// Print: "X of 8 sensors recorded above-average load"
// Print the list of those sensor labels.

// TODO: Step 2 — your code here
$above_avg = [];
for ($i = 0; $i < count($sensor_readings); $i++) {
    if ($sensor_readings[$i] > $mean) {
        $above_avg[] = $sensor_labels[$i];
    }
}
echo count($above_avg) . " of " . count($sensor_readings) . " sensors recorded above-average load\n";
echo "Sensors above average: " . implode(", ", $above_avg) . "\n";



// ── STEP 3: Safety threshold check ───────────────────────────
// Check each sensor against $max_safe_load (18.0 tonnes)
// If reading > $max_safe_load: flag as "UNSAFE"
// Otherwise: "SAFE"
// Print a formatted safety report table:
//   Sensor | Reading | Status
//   S1     | 12.4t   | SAFE
//   S4     | 19.8t   | UNSAFE  ← flag clearly

// TODO: Step 3 — your code here
echo "Sensor | Reading | Status\n";
for ($i = 0; $i < count($sensor_readings); $i++) {
    $status = ($sensor_readings[$i] > $max_safe_load) ? "UNSAFE" : "SAFE";
    echo $sensor_labels[$i] . "     | " . $sensor_readings[$i] . "t   | " . $status . "\n";
}  



// ── STEP 4: Sorted safety report ─────────────────────────────
// Sort the sensor readings in DESCENDING order using your
// bubble sort from Task 3 (copy the function here).
// Print the sorted readings alongside their original sensor labels.
// Note: you must track which label belongs to which reading
// as you sort — use a parallel array technique.

// TODO: Step 4 — your code here
// Bubble sort with parallel array for labels
$data = $sensor_readings;
$labels = $sensor_labels;
$n = count($data);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - 1 - $i; $j++) {
        if ($data[$j] < $data[$j + 1]) { // Sort descending
            // Swap readings
            $temp = $data[$j];
            $data[$j] = $data[$j + 1];
            $data[$j + 1] = $temp;
            // Swap corresponding labels
            $temp_label = $labels[$j];
            $labels[$j] = $labels[$j + 1];
            $labels[$j + 1] = $temp_label;
        }
    }
}
echo "\nSorted Safety Report (Descending)\n";
echo "Sensor | Reading | Status\n";
for ($i = 0; $i < count($data); $i++) {
    $status = ($data[$i] > $max_safe_load) ? "UNSAFE" : "SAFE";
    echo $labels[$i] . "     | " . $data[$i] . "t   | " . $status . "\n";
}



// ── Required Test Data Sets — screenshot each ────────────────
// Set A (default above): expect S4 UNSAFE, mean ~13.28t
// Set B: [5.1, 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8]
//        → all SAFE, mean 5.45t, above-avg = 4 sensors
// Set C: [20.1, 21.3, 19.9, 22.0, 18.5, 20.8, 19.2, 21.7]
//        → all UNSAFE (all exceed 18.0t)
