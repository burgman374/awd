<?php
// Function to generate Fibonacci sequence
function generateFibonacci($n) {
    $fib = [0, 1]; // First two Fibonacci numbers
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2]; // Next Fibonacci number
    }
    return $fib;
}

// Number of Fibonacci terms to generate
$terms = 10; // You can change this value

// Generate and display Fibonacci sequence
$fibonacciSequence = generateFibonacci($terms);
echo implode(", ", $fibonacciSequence);
?>
