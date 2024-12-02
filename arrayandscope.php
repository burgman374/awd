<?php
// Global variable to store total number of students
$total_students = 0;

// Array of students (associative array)
$students = [
    ["name" => "John", "age" => 20],
    ["name" => "Alice", "age" => 22],
    ["name" => "Bob", "age" => 21]
];

// Function to display student details and count total students
function displayStudents() {
    // Use global keyword to access the global $total_students variable
    global $students, $total_students;

    // Count the number of students and store in global variable
    $total_students = count($students);
    
    echo "<h2>Student Details:</h2>";
    foreach ($students as $student) {
        echo "Name: " . $student["name"] . " | Age: " . $student["age"] . "<br>";
    }
}

// Function to display the total number of students (using local scope)
function displayTotalStudents() {
    // Using the global $total_students variable
    global $total_students;

    echo "<br><strong>Total Students: $total_students</strong><br>";
}

// Calling the functions
displayStudents(); // Displays student details
displayTotalStudents(); // Displays the total number of students
?>

