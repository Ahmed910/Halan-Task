<?php
// Q1
function palindrome($string)
{
    // Remove spaces and convert to lowercase manually
    $cleanedString = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        // Check if the character is a lowercase letter
        if ($char >= 'a' && $char <= 'z') {
            $cleanedString .= $char; // Build the cleaned string
        }
    }

    // Check if the cleaned string is a palindrome
    $length = strlen($cleanedString);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($cleanedString[$i] !== $cleanedString[$length - 1 - $i]) {
            return false; // Not a palindrome
        }
    }

    return true; // It's a palindrome
}

// Example usage
var_dump(palindrome("anna"));
var_dump(palindrome("apple"));
var_dump(palindrome("level"));
var_dump(palindrome("rotator"));

// Q2
// mv original.txt changed.txt

// Q3
function runLengthEncode($s)
{
    if (empty($s)) {
        return "";
    }

    $encodedString = "";
    $count = 1;

    for ($i = 1; $i < strlen($s); $i++) {
        if ($s[$i] === $s[$i - 1]) {
            $count++;
        } else {
            $encodedString .= $s[$i - 1] . $count;
            $count = 1;
        }
    }

    // Append the last character and its count
    $encodedString .= $s[strlen($s) - 1] . $count;

    return $encodedString;
}

function runLengthDecode($encoded)
{
    $decodedString = "";
    $length = strlen($encoded);
    $i = 0;

    while ($i < $length) {
        $char = $encoded[$i];
        $i++;
        $count = "";

        // Read the number following the character
        while ($i < $length && ctype_digit($encoded[$i])) {
            $count .= $encoded[$i];
            $i++;
        }

        $decodedString .= str_repeat($char, (int)$count);
    }

    return $decodedString;
}

// Example usage
$encoded = runLengthEncode("aaaaaaaaaabbbaxxxxyyyzyx");
echo $encoded . "\n";  // Output: a10b3a1x4y3z1y1x1

$decoded = runLengthDecode($encoded);
echo $decoded . "\n";  // Output: aaaaaaaaaabbbaxxxxyyyzyx

//Q4

function compose($f, $g)
{
    return fn($x) => $f($g($x));
}

function inc($x)
{
    return $x + 1;
}

function square($x)
{
    return $x * $x;
}

$h = compose('square', 'inc');

echo $h(6);

// Q5

function unique($arr) {
    $counts = [];
    $result = [];

    // Count occurrences of each string in the array
    foreach ($arr as $item) {
        if (isset($counts[$item])) {
            $counts[$item]++;
        } else {
            $counts[$item] = 1;
        }
    }

    // Find items that occur exactly once
    foreach ($counts as $item => $count) {
        if ($count == 1) {
            $result[] = $item;
        }
    }

    return $result;
}

print_r(unique(['apples', 'oranges', 'flowers', 'apples']));

print_r(unique(['apples', 'apples']));

// Q6

function transpose($matrix) {
    $transposed = [];
    
    // Get the number of rows and columns
    $rows = count($matrix);
    $cols = count($matrix[0]);
    
    // Initialize the transposed matrix
    for ($i = 0; $i < $cols; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            // Set the transposed matrix elements
            $transposed[$i][$j] = $matrix[$j][$i];
        }
    }
    
    return $transposed;
}

// Example usage:
$matrix1 = [
    [1, 2],
    [3, 4]
];
$transposed1 = transpose($matrix1);
print_r($transposed1);


$matrix2 = [
    [1, 2, 3, 4],
    [5, 6, 7, 8]
];
$transposed2 = transpose($matrix2);
print_r($transposed2);

// Q6

// Steps:
// 1- Fill Container B (3 liters):

// Fill container B completely from the water source. Now, Container B has 3 liters.
// 2- Pour B into A:

// Pour the 3 liters from Container B into Container A. Now, Container A has 3 liters, and Container B is empty.
// 3- Fill Container B again (3 liters):

// Fill container B from the water source again. Now, Container B has 3 liters, and Container A still has 3 liters.
// 4- Pour B into A until A is full:

// Pour the water from Container B into Container A. Since Container A can only hold 5 liters and it already has 3 liters, it can only take 2 more liters. Now, Container A has exactly 5 liters, and Container B has 1 liter left.
// 5- Empty Container A:

// Empty Container A completely. Now, Container A has 0 liters, and Container B still has 1 liter.
// 6- Pour the remaining 1 liter from B into A:

// Pour the 1 liter from Container B into Container A. Now, Container A has 1 liter, and Container B is empty.
// 7- Fill Container B (3 liters):

// Fill Container B completely from the water source again. Now, Container B has 3 liters.
// 8- Pour B into A:

// Pour all 3 liters from Container B into Container A. Now, Container A has exactly 4 liters (1 liter from step 6 plus 3 liters), and Container B is empty.
// Result:
// Container A now has exactly 4 liters of water.

// Another Solution

// Steps:
// 1- Fill Container A (5 liters):

// Fill Container A completely from the water source. Now, Container A has 5 liters, and Container B is empty.
// 2- Pour from A to B:

// Pour water from Container A into Container B until Container B is full. Since Container B can hold 3 liters, you will pour 3 liters from A into B.
// Now, Container A has 2 liters (5 - 3 = 2), and Container B has 3 liters.
// 3- Empty Container B:

// Empty Container B completely. Now, Container A still has 2 liters, and Container B is empty.
// 4- Pour from A to B again:

// Pour the remaining 2 liters from Container A into Container B. Now, Container A is empty, and Container B has 2 liters.
// 5- Fill Container A (5 liters):

// Fill Container A completely from the water source again. Now, Container A has 5 liters, and Container B has 2 liters.
// 6- Pour from A to B until B is full:

// Pour from Container A into Container B until Container B is full. Since Container B already has 2 liters, it can take 1 more liter (3 - 2 = 1).
// Now, Container A will have exactly 4 liters left (5 - 1 = 4), and Container B will be full with 3 liters.
// Result:
// Container A now has exactly 4 liters of water.

// Q8

function index_of_first_duplicate($arr) {
    // Create an empty array to track seen elements
    $seen = [];

    // Iterate through the array
    for ($i = 0; $i < count($arr); $i++) {
        if (isset($seen[$arr[$i]])) {
            // If element is already in seen, return its index
            return $i;
        }
        // Mark the element as seen
        $seen[$arr[$i]] = true;
    }
    // If no duplicate found, return -1
    return -1;
}

// Example usage:
echo index_of_first_duplicate([5, 17, 3, 17, 4, -1]);

// Q9
class Node {
    public int $value;
    public array $children;

    public function __construct($value) {
        $this->value = $value;
        $this->children = [];
    }

    public function addChild(Node $child) {
        $this->children[] = $child;
    }
}

function sum(Node $node) {
    // Initialize the total sum with the node's value
    $total = $node->value;

    // Recursively add the values of all children
    foreach ($node->children as $child) {
        $total += sum($child);
    }

    return $total;
}

// Example usage
$root = new Node(1);
$child1 = new Node(2);
$child2 = new Node(3);
$child3 = new Node(4);
$child4 = new Node(5);

$root->addChild($child1);
$root->addChild($child2);
$child1->addChild($child3);
$child1->addChild($child4);

echo sum($root);